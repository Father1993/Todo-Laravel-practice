<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step;
use App\Models\Task;

class TaskStepsController extends Controller
{
    public function store (Task $task)
    {

        $task->addStep(\request()->validate([
            'description' => 'required|min:5',
        ]));

        return back();
    }
}

