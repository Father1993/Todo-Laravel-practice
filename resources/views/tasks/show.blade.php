@extends('layout.master')

@section('content')
    <div class="container col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            {{ $task->title }}
            <a href="/skillbox_laravel/public/tasks/{{ $task->id }}/edit">Изменить</a>
        </h3>
        
        {{ $task->body }}

        @if($task->steps->isNotEmpty())
            <ul class="list-group">
                @foreach ($task->steps as $step)
                    <li class="list-group-item">
                        <form method="POST" action="/skillbox_laravel/public/completed-steps/{{ $step->id }}">
                            @if ($step->completed)
                                @method('DELETE')
                            @endif
                            @csrf
                            <div class="form-check">
                                <label class="form-check-label {{ $step->completed ? 'completed' : ''}}">
                                    <input class="form-check-input" type="checkbox" onclick="this.form.submit()" name="completed"
                                    {{ $step->completed ? 'checked' : ''}}>
                                    
                                    {{ $step->description }}
                                </label>
                            </div>
                        </form>
                    </li>    
                @endforeach
            </ul>
        @endif
        
        <form class="card card-body mb-4" method="POST" action="/skillbox_laravel/public/tasks/{{ $task->id }}/steps">
            @csrf
            <div class="form-group">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Шаг"
                    value="{{ old('description') }}"
                    name="description"
                >
            </div>
            <button type="submit" class="btn btn-primary">Добавить шаг</button>

        </form>

        @include('layout.errors')

        <hr>
        <a href="/skillbox_laravel/public/tasks/">Вернуться к списку задач</a>
    </div>
@endsection