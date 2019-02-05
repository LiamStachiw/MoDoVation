@extends('includes.master')

@section ('content')

  <div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light ">

    <h1 align ="center">Journals</h1>

    <!--
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

      -->

        <hr>

        <button class="btn btn-outline-secondary" onclick="location.href='{{ url('promptedJournal') }}'">New prompted entry</button>
        <button class="btn btn-outline-secondary" onclick="location.href='{{ url('unpromptedJournal') }}'">New free-form entry</button>

        <hr>

        @foreach ($journals as $journal)

          @include('Journals.journalEntry')
            
        @endforeach
        
  </div>

@endsection