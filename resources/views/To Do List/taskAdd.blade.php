@extends('includes.master')

@section ('content')

<div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light ">

    <h1 align ="center">Add a Task</h1>

    <hr>

    @include('includes.errors')

    <form method="POST" action="/todo">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="taskName">Task Name:</label>

          <input class="form-control" id="taskName" name="taskName"/>
        </div>

        <button type="submit" class="btn btn-outline-secondary">Add this Task</button>

      </form>

</div>

@endsection