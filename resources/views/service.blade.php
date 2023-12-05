@extends('layout.master')

@section('content')

    <div class="container col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Отправить уведомление
        </h3>

        @include('layout.errors')

        <form method="POST" action="/skillbox_laravel/public/service">
            @csrf 

            <div class="mb-3">
                <label for="inputTitle" class="form-label">Заголовок уведомления</label>
                <input type="text" class="form-control" id="inputTitle" 
                placeholder="Введите заголовок"
                value="{{ old('title') }}"
                name="title">
            </div>
            <div class="mb-3">
                <label for="inputText" class="form-label">Текст уведомления</label>
                <textarea class="form-control" id="inputBody" name="text">{{old('text')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>

@endsection