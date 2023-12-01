@extends('layout.master')

@section('content')
    <div class="container col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            {{ $task->title }}
            <a href="/skillbox_laravel/public/tasks/{{ $task->id }}/edit">Изменить</a>
        </h3>
        
        {{ $task->body }}
        
        <hr>
        <a href="/skillbox_laravel/public/tasks/">Вернуться к списку задач</a>
    </div>
@endsection