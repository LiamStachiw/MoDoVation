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

Route::get('/task/{task}', 'TasksController@task');

Route::get('/taskAdd', 'TasksController@add');

Route::post('/todo', 'TasksController@storeTask');

Route::post('/goal/{goal}/task', 'TasksController@taskToGoal');

Route::get('/todo', 'TasksController@index');

Route::get('/task/{task}/edit', 'TasksController@edit');

Route::patch('/task/{task}', 'TasksController@update');

Route::delete('/task/{task}', 'TasksController@destroy');

Route::get('/task/{task}/updateTasks', 'TasksController@updateTasks');

Route::get('/week', function () {
    return view('/To Do List/todolistWeek');
});

Route::get('/month', function () {
    return view('/To Do List/todolistMonth');
});


/***************
* GOALS ROUTES *
****************/

Route::get('/goal/{goal}', 'GoalsController@goal');

Route::get('/goalAdd', 'GoalsController@add');

Route::post('/goalAdd', 'GoalsController@storeGoal');

Route::get('/goals', 'GoalsController@index');

Route::get('/goal/{goal}/edit', 'GoalsController@edit');

Route::post('/goal/{goal}/resetGoal', 'GoalsController@resetGoal');

Route::get('/goal/{goal}/updateTasks', 'GoalsController@updateTasks');

Route::patch('/goal/{goal}', 'GoalsController@update');

Route::delete('/goal/{goal}', 'GoalsController@destroy');

/******************
* JOURNALS ROUTES *
*******************/

Route::get('/journal/{journal}', 'JournalsController@journal');

Route::get('/promptedJournal', 'JournalsController@prompted');

Route::get('/unpromptedJournal', 'JournalsController@unprompted');

Route::post('/journals', 'JournalsController@storeUnprompted');

Route::post('/journals', 'JournalsController@storePrompted');

Route::get('/journals', 'JournalsController@index');

Route::get('/journal/{journal}/edit', 'JournalsController@edit');

Route::patch('/journal/{journal}', 'JournalsController@update');

Route::delete('/journal/{journal}', 'JournalsController@destroy');



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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');