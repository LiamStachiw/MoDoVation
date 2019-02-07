@extends('includes.master')

@section ('content')

<div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light ">

    <h1 align ="center">Task View</h1>

    <hr>

    <h1> {{ $task->taskName }} </h1>

</div>

@endsection