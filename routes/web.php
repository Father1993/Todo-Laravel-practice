<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', 'App\Http\Controllers\TasksController@index');
Route::get('/tasks/create', 'App\Http\Controllers\TasksController@create');

Route::post('/tasks', 'App\Http\Controllers\TasksController@store');

Route::get('/tasks/{task}', 'App\Http\Controllers\TasksController@show');
