@php
    $tags = $tags ?? collect();
@endphp

@if($tags->isNotEmpty())

        <div>
                @foreach ($tags as $tag)
                    <a href="/skillbox_laravel/public/tasks/tags/{{ $tag->getRouteKey() }}" class="btn btn-secondary btn-sm"> {{ $tag->name }} </a>
                @endforeach
        </div>
        
        @endif