<?php

namespace App\Http\Controllers;

use App\Tasks;

class TasksController extends Controller
{
    public function index()
    {
        return view('/To Do List/todolist');
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
        return redirect('/todolist');
    }
}
