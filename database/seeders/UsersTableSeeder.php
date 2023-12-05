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
        $data = factory(\App\User::class, 10)->create([]);
        $data = factory(\App\User::class, 10)->make([]);
        $data = factory(\App\User::class, 10)->raw([]);
    }
}