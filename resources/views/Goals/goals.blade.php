@extends('includes.master')

@section ('content')

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

</p>


@endsection