<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksToUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Task::factory(5)->create([
                'id'=> \App\Models\User::first() 
            ])->each(function (\App\Models\Task $task) {
                $task->steps()->saveMany(\App\Models\Step::factory(rand(1,5))->make(['task_id'=> '']));
            });
    }
}
