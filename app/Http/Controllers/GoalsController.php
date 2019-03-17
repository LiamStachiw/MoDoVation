<?php

namespace App\Http\Controllers;

use App\Goals;
use App\Tasks;
use Carbon\Carbon;
use Auth;

class GoalsController extends Controller
{
    public function index()
    {
        if(Auth::check()){

            $goals = Goals::latest()->get();

            $tasks = Tasks::all();

            return view('/Goals/goals', compact('goals', 'tasks'));

        }else{
            return view('/auth/login');        
        }
    }

    //form for adding new goals
    public function add()
    {
        if(Auth::check()){

            return view('Goals/goalAdd');

        }else{
            return view('/auth/login');        
        }
    }

    //redirect to specific goal detailed view - SHOW the goal
    public function goal(Goals $goal)
    {
        if(Auth::check()){
            if($goal->user_id == Auth::id()){

                $tasks = Tasks::all();

                return view('/Goals/goal', compact('goal', 'tasks'));
            }else{
                $goals = Goals::latest()->get();

                return view('/Goals/goals', compact('goals'));
            }

        }else{
            return view('/auth/login');        
        }
    }

    //Store a goal to the database
    public function storeGoal()
    {

        $this->validate(request(), [

            'goalName' => 'required'
        ]);

        //create the goal with the proper values
        Goals::create([
            'goalName' => request('goalName'),
            'user_id' => Auth::id(),
            'lastComplete' => Carbon::now(),
            'streakDays' => 0,
            'totalDays' => 0,
            'goalDate' => request('goalDate')
        ]);

        //redirect to the goals home page
        return redirect('/goals');
    }

    public function edit(Goals $goal)
    {
        if(Auth::check()){

            return view('goals.edit', compact('goal'));

        }else{
            return view('/auth/login');        
        }
    }

    public function update(Goals $goal)
    {

        $this->validate(request(), [

            'goalName' => 'required'
        ]);

        $goal->update(request(['goalName', 'goalDate']));
        
        return redirect('/goals');

    }

    public function destroy(Goals $goal)
    {

        Tasks::where('goal_id', $goal->id)->delete();

        $goal->delete();

        return redirect('/goals');
    }

    public function updateTasks(Goals $goal)
    {
        if(isset($_GET['taskId'])){

            $allDone = true;
            $task = Tasks::find($_GET['taskId']);

            $task->update(['isComplete' => $_GET['checked']]);

            $allTasks = Tasks::where('goal_id', $goal->id)->get();

            foreach($allTasks as $subTask)
            {
                if($subTask->isComplete == 0)
                {
                    $allDone = false;
                }
            }

            if($allDone == true)
            {
                
                $checkDate = new Carbon($goal->lastComplete);
                $checkDate = $checkDate->addDays(1);
                
                if(Carbon::now() > $checkDate)
                {  

                    $goal->update([
                        'totalDays' => $goal->totalDays + 1,
                        'streakDays' => 0,
                        'lastComplete' => Carbon::now(),
                        'isComplete' => 1,]);

                }else if (Carbon::now() <= $checkDate){

                    $goal->update([
                        'totalDays' => $goal->totalDays + 1,
                        'streakDays' => $goal->streakDays + 1,
                        'lastComplete' => Carbon::now(),
                        'isComplete' => 1,]);

                }

                foreach($allTasks as $subTask)
                {
                    $subTask->update(['isDisabled' => 1]);
                }

                return('y');

            }
        }else{
            return redirect('/');
        }
    }

    public function resetGoal(Goals $goal)
    {

        $allTasks = Tasks::where('goal_id', $goal->id)->get();

        foreach($allTasks as $subTask)
        {
            $subTask->update(['isDisabled' => 0]);
        }
        
        $goal->update([
            'totalDays' => $goal->totalDays - 1,
            'streakDays' => $goal->streakDays - 1,
            'isComplete' => 0]);

        return back();
    }
}
