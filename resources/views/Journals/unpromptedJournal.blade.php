@extends('includes.master')

@section ('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3  bg-light">

    <h1>Free-form Journal Entry</h1>

    <hr>

    @include('includes.errors')

    <form method="POST" action="/journals">

        @csrf

        <div class="form-group">
          <label for="body">Reflect on your progress:</label>

          <textarea class="form-control" id="body" name="body" > {{ old('body') }} </textarea>
        </div>

        <button type="submit" class="btn btn-outline-secondary">Publish</button>

      </form>

      

</div>

<!-- 
<p>
    This page will allow you to write a new journal entry. 
    <br>The unprompted journal will not ask you any questions, or give you any writing prompts, you can just write whatever you want.
    <ul>
        <li>Write in a single textbox, with no prompts</li>
        <li>Save/publsih entry</li>
    </ul>

</p>

-->


@endsection