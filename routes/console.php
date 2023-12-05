<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('test', function () {
    /** @var $this  \Illuminate\Console\Command */

    // Команды-вопросы

    // $name = $this->ask('Как вас зовут?');
    // $password = $this->secret('Введите пароль');
    // $this->info($name);
    // $this->info($password);

    // Вопросы-цепочка

    // if ($this->confirm('Вам есть 18?')) {
    //     $this->info('Зачем вы нас обманываете?');
    // }

    // Выбор ответов

    // $name = $this->anticipate('Какая ваша любимая еда', ['Картошка', 'Мясо', 'Крылышки']);
    // $this->info($name);

    // Выбор ответов массивом

    // $name = $this->choise('Какая ваша любимая еда', ['Картошка', 'Мясо', 'Крылышки']);
    // $this->info($name);

    // Команда из подкоманды callSilent- вывод команды вместо другой команды будет заглушен

    $subject = $this->ask('Введите тему письма?');

    $this->call('app:say-hello', [

        'users' => [1,2],
        '--subject' => $subject,
        '--class' => true,
    ]);
});