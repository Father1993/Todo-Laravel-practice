<?php

namespace Tests\Unit;

use Faker\Factory;
use GuzzleHttp\Promise\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use HasFactory;

class UsersTest extends TestCase
{
    use RefreshDatabase;


    public function TestCase ()
    {
        $user = \App\Models\User::factory()->create();

        $attributes = \App\Models\Task::factory()->raw(['id'=> $user]);

        $user->task()->create($attributes);

        $this->assertEquals($attributes['title'], $user->tasks->first()->title);
    }

    public function testAUserCanHaveACompany()
    {
        $user = \App\Models\User::factory()->create();

        $user->company()->create(['name' => 'Yandex']);

        $this->assertEquals('Yandex', $user->company->name);
    }
}

