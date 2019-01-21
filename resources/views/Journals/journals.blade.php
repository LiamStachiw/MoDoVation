@extends('includes.master')

@section ('content')

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">

    <h1 align ="center">Journals Page</h1>

    <hr>

    <p>
        This page serves as the journal menu
        <br>It allows you to:

        <ul>
            <li>View a list/news feed of all your journals</li>
            <li>Add a journal (prompted or unprompted)</li>
            <li>Delete entry</li>
            <li>Update/Edit entry</li>
        </ul>

        <hr>

        @foreach ($journals as $journal)

          @include('Journals.journalEntry')
            
        @endforeach
        

        <button onclick="location.href='{{ url('promptedJournal') }}'">Create prompted journal</button>
        <button onclick="location.href='{{ url('unpromptedJournal') }}'">Create unprompted journal</button>
        <button onclick="location.href='{{ url('journal') }}'">Specific Journal</button>

  </div>

  


@endsection