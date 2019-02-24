@extends('includes.master')

@section ('content')

<!--
<p>
    This page will allow you to create a new journal entry. 
    <br>The prompted journal will offer many textboxes for you to type in, each asking you a different question about your progress
    <br>(Ex: How do you feel about your progress this week/today? What can you do to improve your progress this week/today? Are you on track?)
    <ul>
        <li>Write in several textboxes with prompted questions</li>
        <li>save/publish journal</li>
    </ul>

</p>
-->


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3  bg-light">

    <h1>Prompted Journal Entry</h1>

    <hr>

    @include('includes.errors')

    <form method="POST" action="/journals">

        @csrf

        <div class="form-group">
          <label for="body">What are you initial thoughts on your progress since your last journal entry?</label>

          <textarea class="form-control" id="body" name="body" > {{ old('body') }} </textarea>
        </div>

        <hr>

        <h6>Optional Entries: Fill as many or as few as you'd like</h6> 

        <!-- More of these can be created, indefinitely. Just update the migration table, and remigrate. 
            You will also have to display the new prompts in the journals pages. Just copy and paste, changing ht ename of the prompt-->

        <div class="form-group">
            <label for="prompt1">What have you been doing well?</label>
  
            <textarea class="form-control" id="prompt1" name="prompt1" > {{ old('prompt1') }} </textarea>
        </div>

        <div class="form-group">
            <label for="prompt2">How will you continue to do this well?</label>
  
            <textarea class="form-control" id="prompt2" name="prompt2" > {{ old('prompt2') }} </textarea>
        </div>

        <div class="form-group">
            <label for="prompt3">What needs improvement?</label>
  
            <textarea class="form-control" id="prompt3" name="prompt3" > {{ old('prompt3') }} </textarea>
        </div>

        <div class="form-group">
            <label for="prompt4">How do you plan to improve this?</label>
  
            <textarea class="form-control" id="prompt4" name="prompt4" > {{ old('prompt4') }} </textarea>
        </div>

        <div class="form-group">
            <label for="prompt5">Are you on track to achieve your goals?</label>
  
            <textarea class="form-control" id="prompt5" name="prompt5" > {{ old('prompt5') }} </textarea>
        </div>

        

        <button type="submit" class="btn btn-outline-secondary">Publish</button>

      </form>

      

</div>


@endsection