<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;


    // public $fillable = ['title', 'body'];
    public $guarded = [];

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
        return $this->belongsToMany(Tag::class);
    }

    public function addStep($attributes)
    {
        return $this->steps()->create($attributes);
    }
}
