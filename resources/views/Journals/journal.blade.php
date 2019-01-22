@extends('includes.master')

@section ('content')

<div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">

    <h1>Journal Entry</h1>

    <p>{{ $journal->created_at->toFormattedDateString() }} </p>

    <!-- 
    <p>
        This page will let you view a past journal entry. Specific to the entry you clicked from the list
        <ul>
            <li>Delete entry</li>
            <li>Update/Edit entry</li>
            <li>View/Read/Scroll through your post</li>
        </ul>

    </p>
    -->

    <hr>

    <h1>{{ $journal->title }}</h1>

    {{ $journal->body }}

    <br><br>

    {{ $journal->prompt1 }}

    <br><br>

    {{ $journal->prompt2 }}

    <br><br>

    {{ $journal->prompt3 }}

    <br><br>

    {{ $journal->prompt4 }}

    <br><br>

    {{ $journal->prompt5 }}

</div>


@endsection