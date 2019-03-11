<?php

namespace App\Http\Controllers;

use App\Goals;
use App\Tasks;
use Auth;

class GoalsController extends Controller
{
    public function index()
    {
        if(Auth::check()){

            $goals = Goals::latest()->get();

            return view('/Goals/goals', compact('goals'));

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

        //send the request data for title and body to the database
        Goals::create([
            'goalName' => request('goalName'),
            'user_id' => Auth::id(),
            'streakDays' => 0,
            'totalDays' => 0
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

        $goal->update(request(['goalName']));
        
        return redirect('/goals');

    }

    public function destroy(Goals $goal)
    {

        Tasks::where('goal_id', $goal->id)->delete();

        $goal->delete();

        return redirect('/goals');
    }
}
