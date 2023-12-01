@extends('layout.master')

@section('content')

    <div class="container col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Изменение задачи
        </h3>

        @include('layout.errors')

        <form method="POST" action="/skillbox_laravel/public/tasks/{{ $task->id }}">
            @csrf 
            @method('PATCH')

            <div class="mb-3">
                <label for="inputTitle" class="form-label">Название задачи</label>
                <input type="text" class="form-control" id="inputTitle" 
                placeholder="Введите название задачи" 
                value="{{old('title', $task->title) }}"
                name="title">
            </div>
            <div class="mb-3">
                <label for="inputBody" class="form-label">Описание задачи</label>
                <textarea name="body" class="form-control" id="inputBody">{{ old ('body', $task->body) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>


        <form method="POST" action="/skillbox_laravel/public/tasks/{{ $task->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>

    </div>

@endsection