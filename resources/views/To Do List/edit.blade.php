@extends('includes.master')

@section ('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3  bg-light">

    <h1>Edit Goal</h1>

    <hr>

    @include('includes.errors')

    <form method="POST" action="/task/{{$task->id}}">

        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="taskName">Task Name:</label>

            <input class="form-control" id="taskName" name="taskName" value="{{ $task->taskName }}"/>

            <label for="taskDate">Task Date:</label>

          <input type="date" value="{{ $task->taskDate }}" class="form-control" id="taskDate" name="taskDate"/>
        </div>

        <button type="submit" class="btn btn-outline-secondary">Update Task</button>

    </form>

    <br>

    <form method="POST" action="/task/{{$task->id}}">

        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn btn-outline-danger">Delete Task</button>

    </form>

</div>

@endsection