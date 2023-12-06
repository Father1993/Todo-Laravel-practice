<?php

namespace App\Models;

use App\Events\TaskCreated;
use App\Http\Controllers\TasksController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Database\Eloquent\Collection;

class Task extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;


    // public $fillable = ['title', 'body'];
    public $guarded = [];

    protected $dispatchesEvents = [
        'created' => TaskCreated::class,
    ];
    
    public function getRouteKeyName()
    {
        return 'id';
    }

    public function scopeIncompleted($query)
    {
        return $query->where('completed', 0);
    }

    // $task->steps
    public function steps()
    {
        return $this->hasMany(Step::class);
    }


    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    

    public function addStep($attributes)
    {
        return $this->steps()->create($attributes);
    }

    public function owner () 
    {
        return $this->belongsTo(User::class);
    }

    public function isCompleted()
    {
        return (bool) $this->completed;
    }

    public function isNotCompleted()
    {
        return  ! $this->completed;
    }

    public function newCollection(array $models = [])
    {
        return new class($models) extends Collection {
            public function allCompleted()
            {
                return $this->filter->isCompleted();
            }

            public function allNotCompleted()
            {
                return $this->filter->isNotCompleted();
            }
        };
    }
}
