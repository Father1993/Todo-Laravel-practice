<div class="blog-post">
        <h2 class="blog-post-title"><a href="/skillbox_laravel/public/tasks/{{ $task->id }}">{{ $task->title }}</a></h2>
        <p class="blog-post-meta">{{ $task->created_at->toFormattedDateString() }}</p>

        @include('tasks.tags', ['tags' => $task->tags])
        
        
        {{ $task->body }}
        <hr>

</div>