@extends('includes.master')

@section ('content')

<h1>Journals Page</h1>

<p>
    This page serves as the journal menu
    <br>It allows you to:

    <ul>
        <li>View a list/news feed of all your journals</li>
        <li>Add a journal (prompted or unprompted)</li>
        <li>Delete entry</li>
        <li>Update/Edit entry</li>
    </ul>

    <button onclick="location.href='{{ url('promptedJournal') }}'">Create prompted journal</button>
    <button onclick="location.href='{{ url('unpromptedJournal') }}'">Create unprompted journal</button>
    <button onclick="location.href='{{ url('journal') }}'">Specific Journal</button>

</p>


@endsection