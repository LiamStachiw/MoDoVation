@extends('includes.master')

@section ('content')

<div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light ">

    <h1 align ="center">Today's To Do List</h1>

    <hr>

    <button class="btn btn-outline-secondary" onclick="location.href='{{ url('taskAdd') }}'">Add a Task</button>

    <hr>

    <ul>
        @foreach ($tasks as $task)
            @include('To Do List.taskEntry')
        @endforeach
    </ul>

</div>

<!-- 
<h1>To Do List</h1>

<p>
    This will have the list of tasks for the user to see when logging in. Here they can: 
    <ul>
        <li> See tasks seperated by goal, and general</li>
        -See tasks for today
        -See tasks for 7 days 
        -See tasks in Calendar view (new page)
        <li>Add tasks</li>
        <li>Delete tasks</li>
        <li>set tasks to specific dates in the future</li>
        <li>Link to archived tasks page - will show all tasks that have been completed, rather than deleting them</li>
    </ul>
</p>


    For each task
        create a  grid row with the task, associated goal, and checkbox
    end for

    Extra grid row on bottom to create task, update to database, refresh
-->



@endsection