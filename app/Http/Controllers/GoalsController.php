<?php

namespace App\Http\Controllers;

use App\Goals;
use App\Tasks;

class GoalsController extends Controller
{
    public function index()
    {
        $goals = Goals::latest()->get();

        return view('/Goals/goals', compact('goals'));
    }

    //form for adding new goals
    public function add()
    {
        return view('Goals/goalAdd');
    }

    //redirect to specific goal detailed view - SHOW the goal
    public function goal(Goals $goal)
    {
        $tasks = Tasks::all();

        return view('/Goals/goal', compact('goal', 'tasks'));
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
            'streakDays' => 0,
            'totalDays' => 0
        ]);

        //redirect to the goals home page
        return redirect('/goals');
    }

    public function edit(Goals $goal)
    {
        return view('goals.edit', compact('goal'));
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
