@extends('layout.master')

@section('content')

    <div class="container col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Создание задачи
        </h3>

        @include('layout.errors')

        <form method="POST" action="/skillbox_laravel/public/tasks">
            @csrf 

            <div class="mb-3">
                <label for="inputTitle" class="form-label">Название задачи</label>
                <input type="text" class="form-control" id="inputTitle" 
                placeholder="Введите название задачи"
                value="{{ old('title') }}"
                name="title">
            </div>
            <div class="mb-3">
                <label for="inputBody" class="form-label">Описание задачи</label>
                <textarea class="form-control" id="inputBody" name="body">{{old('body')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Создать задачу</button>
        </form>
    </div>

@endsection