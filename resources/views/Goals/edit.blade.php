@extends('includes.master')

@section ('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3  bg-light">

    <h1>Edit Goal</h1>

    <hr>

    @include('includes.errors')

    <form method="POST" action="/goal/{{$goal->id}}">

        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="goalName">Goal Name:</label>

            <input class="form-control" id="goalName" name="goalName" value="{{ $goal->goalName }}"/>

            <label for="goalDate">Goal Deadline:</label>

          <input type="date" value="{{ $goal->goalDate }}" class="form-control" id="goalDate" name="goalDate"/>
        </div>

        <button type="submit" class="btn btn btn-outline-secondary">Update Goal</button>

    </form>

    <br>

    <form method="POST" action="/goal/{{$goal->id}}">

        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn btn-outline-danger">Delete Goal</button>

    </form>

</div>

@endsection