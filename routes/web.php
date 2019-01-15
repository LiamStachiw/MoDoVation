<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*************
* HOME ROUTE *
**************/

Route::get('/', function () {
    return view('index');
});

/********************
* TO DO LIST ROUTES *
*********************/

Route::get('/todo', 'TasksController@index');


/***************
* GOALS ROUTES *
****************/

Route::get('/goals', function () {
    return view('/Goals/goals');
});

Route::get('/goal', function () {
    return view('/Goals/goal');
});

/******************
* JOURNALS ROUTES *
*******************/
Route::get('/journals', 'JournalsController@index');

Route::get('/journal', 'JournalsController@journal');

Route::get('/promptedJournal', 'JournalsController@prompted');

Route::get('/unpromptedJournal', 'JournalsController@unprompted');

Route::post('journals', 'JournalsController@storeUnprompted');

/*****************
* PROFILE ROUTES *
******************/

Route::get('/profile', function () {
    return view('/Profile/profile');
});

/******************
* SETTINGS ROUTES *
*******************/

Route::get('/settings', function () {
    return view('/Settings/settings');
});

/***************
* ABOUT ROUTES *
****************/

Route::get('/about', function () {
    return view('/About/about');
});

Route::get('/purpose', function () {
    return view('/About/purpose');
});

Route::get('/team', function () {
    return view('/About/team');
});