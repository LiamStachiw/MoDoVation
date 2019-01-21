@extends('includes.master')

@section ('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">

    <h1>Journal Page</h1>

    <p>
        This page will let you view a past journal entry. Specific to the entry you clicked from the list
        <ul>
            <li>Delete entry</li>
            <li>Update/Edit entry</li>
            <li>View/Read/Scroll through your post</li>
        </ul>

    </p>

    <hr>

    <h1>{{ $journal->title }}</h1>

    {{ $journal->body }}

</div>


@endsection