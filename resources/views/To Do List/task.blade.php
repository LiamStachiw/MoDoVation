@extends('includes.master')

@section ('content')

<div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light ">

    <h1 align ="center">Task View</h1>

    <hr>

    <h1> {{ $task->taskName }} </h1>
    @if($task->goal_id == NULL)
        <i>This task is not associated with a goal</i>
    @else
        <i>This task is associated with the goal: <a href="/goal/{{ $task->goal_id }}">{{ $goal->goalName }}</a></i>
    @endif

    <br><br>

    <form action="/task/{{$task->id}}/edit">
        <button type="submit" class="btn btn-outline-secondary">Edit This Task</button>
    </form>

</div>

@endsection