<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function complete($completed = true)
    {
        $this->update(['completed' => $completed]);
    }

    public function incomplete()
    {
        $this->complete(false);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
