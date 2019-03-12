@extends('includes.master')

@section ('content')

<div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light ">

    <h1 align ="center">Goal View</h1>

    <hr>

    {{-- 
        TODO: Come up with a way to 'check off' tasks within a goal.
        Checking off all tasks will increase the total counter by 1.
        if it has been less than 24 hours from the last completion, 
        checking off will increase streak by 1.
    --}}

    <h1> {{ $goal->goalName }} </h1>
    <i>Your current streak for this goal is {{ $goal->streakDays }} days.</i><br>
    <i>Your total days completed for this goal is {{ $goal->totalDays }} days.</i>
    <div class="">
        <form method="POST" id="{{$goal->id}}" class="listOfTasks" action="/goal/{{$goal->id}}/resetGoal">
            @csrf
            @foreach ($tasks as $task) 
                @if($task->goal_id == $goal->id)
                    @include('\To Do List.taskEntry')
                @endif 
            @endforeach
            @if($goal->isComplete == 1)
                <button type="submit" class="btn btn-outline-primary">Reset This Goal</button>
            @endif
        </form>
    </div>
    <hr>

    <form action="/goal/{{$goal->id}}/edit">
        <button type="submit" class="btn btn-outline-secondary">Edit This Goal</button>
    </form>

    <hr>

    <h3>Add a task to this goal.</h3>

    <form method="POST" action="/goal/{{ $goal->id }}/task">

        @csrf

        <div class="form-group">
          <label for="taskName">Task Name:</label>

          <input class="form-control" id="taskName" name="taskName"/>
        </div>

        <button type="submit" class="btn btn-outline-secondary">Add This Task</button>

    </form>

</div>


<!--
<h1>Goal Page:</h1>

<p>
    This page will show the goal you clicked on, in detail
    <br>It will allow you to:

    <ul>
        <li>Edit this goal</li>
        <li>Delete this goal</li>
        <li>View your notes about this goal</li>
        <li>Make notes about this goal (Short, mid and long term plans for this goal)</li>
        <li>See stats about the goal (days in a row, days total)</li>
        <li>See tasks associated with this goal</li>
    </ul>

</p>
-->

@endsection