@extends('includes.master')

@section ('content')

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">MoDoVation</h1>
        <p class="lead font-weight-normal">A productivity tool to help you set goals and work towards achieving them.</p>
        <a class="btn btn-outline-secondary" href="#">Register</a>
        </div>
    </div>
    
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Set Goals</h2>
            <p class="lead">Set goals for yourself, and complete tasks to pursue them.</p>
        </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">Accomplish Tasks</h2>
            <p class="lead">Accomplish tasks related to your goals. Start making progress towards goals in a quantifiable way.</p>
        </div>
        </div>
    </div>
    
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">Reflect</h2>
            <p class="lead">Write prompted and unprompted journals to reflect on your progress, and develop strategies moving forward.</p>
        </div>
        </div>

        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Plan for Success</h2>
                    <p class="lead">Stop thinking about your goals, and start achieving them!</p>
                </div>
                </div>

    </div>

@endsection