<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SayHello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     * 
     */

    protected $signature = 'app:say-hello 
                            {user?* : пользователи} 
                            {--subject=Hello : Заголовок письма} 
                            {--c|class : преобразовать в имя класса}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Отправить привет пользователю';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->arguments();

        $users = $this->argument('users')
            ? \App\User::findOrFail($this->argument('users'))
            : \App\User::all()
        ;

        $subject = $this->option('subject');

        if ($this->option('class')) {
            $subject = Str::studly($subject);
        }


        $users->map->notify(new \App\Notifications\SayHello('$subject'));

        $this->info('Уведомления отправлены');
    }
}
