<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

/**
 * GET /tasks (index)
 * GET /tasks/create (create)
 * GET /tasks/1 (show)
 * POST /tasks (store)
 * GET /tasks/1/edit (edit)
 * PATCH /tasks/1 (update)
 * DELETE /tasks/1 (destroy)
 */

Route::view('/', 'welcome');

Route::get('/tasks/tags/{tag}', 'App\Http\Controllers\TagsController@index');

Route::resource('/tasks', 'App\Http\Controllers\TasksController');

Route::post('/tasks/{task}/steps', 'App\Http\Controllers\TaskStepsController@store');

Route::post('/completed-steps/{step}', 'App\Http\Controllers\CompletedStepsController@store');
Route::delete('/completed-steps/{step}', 'App\Http\Controllers\CompletedStepsController@destroy');
