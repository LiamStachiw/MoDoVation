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

Route::get('/todo', function () {
    return view('/To Do List/todolist');
});


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
Route::get('/journals', function () {
    return view('/Journals/journals');
});

Route::get('/journal', function () {
    return view('/Journals/journal');
});

Route::get('/promptedJournal', function () {
    return view('/Journals/promptedJournal');
});

Route::get('/unpromptedJournal', function () {
    return view('/Journals/unpromptedJournal');
});

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

Route::get('/purpose', function () {
    return view('/About/purpose');
});

Route::get('/team', function () {
    return view('/About/team');
});