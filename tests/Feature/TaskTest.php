<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function testAUserCanCreateATask ()
    {
        $this->withoutExceptionHandling();
        // Что, входные данные: Авторизованный пользователь 
        $this->actingAs($user = \App\Models\User::factory()->create());

        // Когда: Приходит на страницу /tasks для создания новой задачи, передовая необходимые данные
        $attributes = \App\Models\Task::factory()->row(['owner_id' => $user]);
        $this->post('/tasks', $attributes = [
            'title' => $this->faker->word(3, true),
            'body' => $this->faker->sentence,
        ]);

        // Что в итоге: Запист в БД о новой задачи
        $this->assertDatabaseHas('tasks', $attributes);

    }
}
