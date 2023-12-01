<?php

namespace App\Http\Controllers;

use App\Models\Task;

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
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        Task::create(request()->all());

        return redirect('/tasks');
    }
}

