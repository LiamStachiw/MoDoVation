@extends('includes.master')

@section ('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3  bg-light">

    <h1>Edit Journal Entry</h1>

    <hr>

    @include('includes.errors')

    <form method="POST" action="/journal/{{$journal->id}}">

        @method('PATCH')
        @csrf

        <div class="form-group">
          <label for="body">What are you initial thoughts on your progress since your last journal entry?</label>

        <textarea class="form-control" id="body" name="body"> {{ $journal->body }} </textarea>
        </div>

        <!-- More of these can be created, indefinitely. Just update the migration table, and remigrate. 
            You will also have to display the new prompts in the journals pages. Just copy and paste, changing ht ename of the prompt-->

        <div class="form-group">
            <label for="prompt1">What have you been doing well?</label>
  
            <textarea class="form-control" id="prompt1" name="prompt1" >{{ $journal->prompt1 }} </textarea>
        </div>

        <div class="form-group">
            <label for="prompt2">How will you continue to do this well?</label>
  
            <textarea class="form-control" id="prompt2" name="prompt2" > {{ $journal->prompt2 }} </textarea>
        </div>

        <div class="form-group">
            <label for="prompt3">What needs improvement?</label>
  
            <textarea class="form-control" id="prompt3" name="prompt3" > {{ $journal->prompt3 }} </textarea>
        </div>

        <div class="form-group">
            <label for="prompt4">How do you plan to improve this?</label>
  
            <textarea class="form-control" id="prompt4" name="prompt4" > {{ $journal->prompt4 }} </textarea>
        </div>

        <div class="form-group">
            <label for="prompt5">Are you on track to achieve your goals?</label>
  
            <textarea class="form-control" id="prompt5" name="prompt5" > {{ $journal->prompt5 }} </textarea>
        </div>

        

        <button type="submit" class="btn btn btn-outline-secondary">Update Journal</button>

      </form>

      <br>

      <form method="POST" action="/journal/{{$journal->id}}">

        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn btn-outline-danger">Delete Journal</button>

      </form>

      

</div>

@endsection