@extends('includes.master')

@section ('content')

<div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light ">

    <h1 align ="center">Your Goals</h1>

    <h6 align ="center">
        Add Goals you want to pursue. <br> 
        Then, add a tasks you want to complete today that will count towards these goals. 
    </h6>

    <hr>

    <button class="btn btn-outline-secondary" onclick="location.href='{{ url('goalAdd') }}'">Add a Goal</button>

    <hr>

    <ul>
        @foreach ($goals as $goal)
            @if($goal->user_id == Auth::id())
                @include('Goals.goalEntry')
            @endif
        @endforeach
    </ul>

</div>

<!-- 
<h1>Goals Page</h1>

<p>
    Here you can:
    <ul>
        <li>View your goals</li>
        <li>View the streak on your goals (ex: you have worked toward this goal 7 days in a row. You have worked toward this goal 24 days in total.</li>
        <li>Add goal</li>
        <li>Delete Goal</li>
        <li>Update Goal</li>
        <li>Add tasks to a specific goal</li>
        <li>Edit tasks to a specific goal</li>
        <li>Delete tasks to a specific goal</li>
    </ul>

    <br>
    This will also link to the following page:
    <button onclick="location.href='{{ url('goal') }}'">Specific Goal-Page</button>

    
    For each goal
        create a grid (or other control) row with the goal, streakcount, totalcount
    end for

    Extra grid row on bottom to create task, update to database, refresh
</p>
-->

@endsection