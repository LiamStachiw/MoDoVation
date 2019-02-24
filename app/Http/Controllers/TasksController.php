<?php

namespace App\Http\Controllers;

use App\Tasks;
use App\Goals;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Tasks::latest()->get();

        return view('/To Do List/todolist', compact('tasks'));
    }

    //form for adding new tasks
    public function add()
    {
        return view('To Do List/taskAdd');
    }

    //redirect to specific task detailed view - SHOW the task
    public function task(Tasks $task)
    {   
        $goal = Goals::where('id', $task->goal_id)->first();
        return view('/To Do List/task', compact('task', 'goal'));
    }

    //Store a task to the database
    public function storeTask()
    {

        $this->validate(request(), [

            'taskName' => 'required'
        ]);

        //send the request data for title and body to the database
        Tasks::create(request(['taskName']));

        //redirect to the journals home page
        return redirect('/todo');
    }

    public function taskToGoal(Goals $goal)
    {

        $this->validate(request(), [

            'taskName' => 'required'
        ]);

        Tasks::create([
            'taskName' => request('taskName'),
            'goal_id' => $goal->id
        ]);

        return back();

    }

    public function edit(Tasks $task)
    {
        return view('To Do List.edit', compact('task'));
    }

    public function update(Tasks $task)
    {

        $this->validate(request(), [

            'taskName' => 'required'
        ]);

        $task->update(request(['taskName']));
        
        return redirect('/todo');

    }

    public function destroy(Tasks $task)
    {
        $task->delete();

        return redirect('/todo');
    }
}
