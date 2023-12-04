<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        $tasks = $tag->tasks()->with('tags')->get();
        return view('tasks.index', compact('tasks'));
    }
}
