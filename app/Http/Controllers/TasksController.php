<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Monolog\Handler\RedisHandler;

class TasksController extends Controller
{
    
    public function index()
    {
        $tasks = Task::latest()->get();

        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function create () 
    {
        return view('tasks.create');
    }

    public function store () 
    {
        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Task::create($attributes);

        return redirect('/tasks');
    }

    public function edit (Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update (Task $task)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $task->update($attributes);

        return redirect('/tasks');
    }

    public function destroy (Task $task)
    {
        $task->delete();
        return redirect('/tasks');  
    }
}

