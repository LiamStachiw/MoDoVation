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
    <strong>What are you initial thoughts on your progress since your last journal entry?</strong><br>
    {{ $journal->body }}

    <br><br>
    @if( $journal->prompt1 != NULL)
        <strong>What have you been doing well?</strong><br>
        {{ $journal->prompt1 }}
    @endif

    <br><br>

    @if( $journal->prompt2 != NULL)
        <strong>How will you continue to do this well?</strong><br>
        {{ $journal->prompt2 }}
    @endif

    <br><br>

    @if( $journal->prompt3 != NULL)
        <strong>What needs improvement?</strong><br>
        {{ $journal->prompt3 }}
    @endif

    <br><br>

    @if( $journal->prompt4 != NULL)
        <strong>How do you plan to improve this?</strong><br>
        {{ $journal->prompt4 }}
    @endif

    <br><br>

    @if( $journal->prompt5 != NULL)
        <strong>Are you on track to achieve your goals?</strong><br>
        {{ $journal->prompt5 }}
    @endif

    <form action="/journal/{{$journal->id}}/edit">
        <button type="submit" class="btn btn-outline-secondary">Edit This Journal</button>
    </form>
    
</div>




@endsection