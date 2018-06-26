<?php

use App\Task;
use App\Work;
use App\User;

Route::get('/login', 'SessionController@create');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/create', 'TasksController@create');

Route::post('/tasks', 'TasksController@store');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/tasks/{task}/create', 'WorkController@show');

Route::post('/tasks/{task}/create', 'WorkController@store');

Route::delete('/tasks/{task}/delete', 'WorkController@delete');

Route::get('/search', 'SearchController@index');

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'SessionController@index');

Route::get('/register', 'RegistrationController@index');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/create', 'TasksController@create');

Route::post('/tasks', 'TasksController@store');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/tasks/{task}/create', 'WorkController@show');

Route::post('/tasks/{task}/create', 'WorkController@store');

Route::get('/search', 'SearchController@index');
*/
