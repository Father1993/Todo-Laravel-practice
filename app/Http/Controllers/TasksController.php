<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Monolog\Handler\RedisHandler;
use App\Models\Tag;
use App\Mail\TaskCreated;
use App\Mail;

class TasksController extends Controller
{
    
    public function index()
    {
        $tasks = Task::with('tags')->latest()->get();

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

        $task = Task::create($attributes);

        flash('Задача успешно создана');

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

        /** @var Collection $taskTags */
        $taskTags = $task->tags->keyBy('name');

        $tags = collect(explode(',', request('tags')))->keyBy(function ($item) {return $item; });

        $syncIds = $taskTags->intersectByKeys($tags)->pluck('id')->toArray();

        $tagsToAttach = $tags->diffKeys($taskTags);

        foreach ($tagsToAttach as $tag) {
            $tag = Tag::firstOrCreate(['name'=>$tag]);

            $syncIds[] = $tag->id;
        };

        $task->tags()->sync($syncIds);

        flash('Задача успешно обновлена');
        return redirect('/tasks');
    }

    public function destroy (Task $task)
    {
        $task->delete();

        flash('Задача удалена', 'warning');
        return redirect('/tasks');  
    }
}

