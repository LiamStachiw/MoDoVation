<?php

namespace App\Http\Controllers;

use App\Tasks;

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
        return view('/To Do List/task', compact('task'));
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
}
