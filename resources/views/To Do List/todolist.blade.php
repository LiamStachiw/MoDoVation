@extends('includes.master')

@section ('content')

<div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light ">

    <h1 align ="center">Today's To Do List</h1>

    {{-- @foreach ($journals as $journal)

          @include('Journals.journalEntry')
            
    @endforeach --}}

<!-- 
<h1>To Do List</h1>

<p>
    This will have the list of tasks for the user to see when logging in. Here they can: 
    <ul>
        <li> See tasks seperated by goal, and general</li>
        <li>Add tasks</li>
        <li>Delete tasks</li>
        <li>set tasks to specific dates</li>
        <li>Link to archived tasks page - will show all tasks that have been completed, rather than deleting them</li>
    </ul>
</p>


    For each task
        create a  grid row with the task, associated goal, and checkbox
    end for

    Extra grid row on bottom to create task, update to database, refresh
-->

</div>

@endsection