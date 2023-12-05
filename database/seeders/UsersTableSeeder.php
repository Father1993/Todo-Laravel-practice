<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = \App\Models\User::factory(10)->create([]);
        $data = \App\Models\User::factory(10)->make([]);
        $data = \App\Models\User::factory(10)->raw([]);


    }
}