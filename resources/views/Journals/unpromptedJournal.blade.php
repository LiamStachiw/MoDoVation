@extends('includes.master')

@section ('content')

<div class="col-sm-8 blog-main">

    <h1>Free-form Journal Entry</h1>

    <hr>

    <form method="POST" action="/journals">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
          <label for="body">Body:</label>

          <textarea name="body" id="body" class="form-control"></textarea>
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