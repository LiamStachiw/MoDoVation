@extends('includes.master')

@section ('content')
<div align="center" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light ">
<h1 align="center">Profile & Settings</h1>
<hr>

{{-- <p align="center">
    This page will be the user's profile page. Show their name, other details etc. <br>
    Edit your info, including: name, email, etc <br>
    Not a social network, no friends or adding people, so this is really just to edit your contact info like name and email. <br>
    Additional Settings will go here also; Disregard Settings page?
    
</p> 
    <ul>
        <li>View & Edit your info, including: name, email, etc</li>
    </ul>--}}

    <div>
        <h4>Name: {{Auth::user()->name}}</h4> 
        <h4>Email: {{Auth::user()->email}}</h4>

    </div>

</div>

@endsection