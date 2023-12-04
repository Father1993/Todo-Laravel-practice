<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step;
use App\Notifications\TaskStepCompleted;

class CompletedStepsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('can:update,step');
    }

    public function store(Step $step)
    {
        $step->complete();

        // $step->task->owner->notify(new TaskStepCompleted());

        return back();
    }

    public function destroy(Step $step)
    {
        $step->incomplete();
        return back();
    }
}
