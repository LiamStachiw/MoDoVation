@extends('includes.master')

@section ('content')


<div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light ">

    <h1 align ="center">Add a Goal</h1>

    <hr>

    @include('includes.errors')

    <form method="POST" action="/goalAdd">

        @csrf

        <div class="form-group">
          <label for="goalName">Goal Name:</label>

          <input class="form-control" id="goalName" name="goalName"/>

          <label for="goalDate">Goal Deadline:</label>

          <input type="date" value="<?php print(date("Y-m-d")); ?>" class="form-control" id="goalDate" name="goalDate"/>
        </div>

        <button type="submit" class="btn btn-outline-secondary">Add this Goal</button>

      </form>

</div>

@endsection