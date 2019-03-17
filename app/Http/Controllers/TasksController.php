<?php

namespace App\Http\Controllers;

use App\Tasks;
use App\Goals;
use Carbon\Carbon;
use Auth;

class TasksController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $tasks = Tasks::latest()->get();

            $goals = Goals::all();

            return view('/To Do List/todolist', compact('tasks', 'goals'));

        }else{
            return view('/auth/login');        
        }
    }

    //form for adding new tasks
    public function add()
    {
        if(Auth::check()){

            $goals = Goals::all();

            return view('To Do List/taskAdd', compact('goals'));

        }else{
            return view('/auth/login');        
        }
    }

    //redirect to specific task detailed view - SHOW the task
    public function task(Tasks $task)
    {   
        if(Auth::check()){
            if($task->user_id == Auth::id()){

                $goal = Goals::where('id', $task->goal_id)->first();
                return view('/To Do List/task', compact('task', 'goal'));
            }else{
                $tasks = Tasks::latest()->get();

                return view('/To Do List/todolist', compact('tasks'));
            }
        
        }else{
            return view('/auth/login');        
        }
    }

    //Store a task to the database
    public function storeTask()
    {

        $this->validate(request(), [

            'taskName' => 'required'

        ]);

        //send the request data for title and body to the database
        Tasks::create([
            'taskName' => request('taskName'),
            'user_id' => Auth::id(),
            'goal_id' => request('goalName'),
            'taskDate' => request('taskDate')
        ]);

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
            'goal_id' => $goal->id,
            'user_id' => Auth::id(),
            'taskDate' => request('taskDate')
        ]);

        return back();

    }

    public function edit(Tasks $task)
    {
        if(Auth::check()){

            return view('To Do List.edit', compact('task'));

        }else{
            return view('/auth/login');        
        }
    }

    public function update(Tasks $task)
    {

        $this->validate(request(), [

            'taskName' => 'required'
        ]);

        $task->update(request(['taskName', 'taskDate']));
        
        return redirect('/todo');

    }

    public function destroy(Tasks $task)
    {
        $task->delete();

        return redirect('/todo');
    }

    public function updateTasks(Tasks $Task)
    {
        if(isset($_GET['taskId'])){
            $task = Tasks::find($_GET['taskId']);
            
            $task->update(['isComplete' => $_GET['checked']]);
        }else{
            return redirect('/');
        }
    }
}
