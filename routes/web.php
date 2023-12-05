<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Models\Company;

Route::view('/', 'welcome');
Route::view('/demo', 'demo');

Route::get('/tasks/tags/{tag}', 'App\Http\Controllers\TagsController@index');

Route::resource('/tasks', 'App\Http\Controllers\TasksController');

Route::post('/tasks/{task}/steps', 'App\Http\Controllers\TaskStepsController@store');

Route::post('/completed-steps/{step}', 'App\Http\Controllers\CompletedStepsController@store');
Route::delete('/completed-steps/{step}', 'App\Http\Controllers\CompletedStepsController@destroy');


Route::post('/companies', function () {
    // auth()->user()->company()->create(request()->validate(['name' => 'required']));

});