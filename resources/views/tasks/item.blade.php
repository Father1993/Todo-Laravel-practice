<div class="blog-post">
        <h2 class="blog-post-title"><a href="/skillbox_laravel/public/tasks/{{ $task->id }}">{{ $task->title }}</a></h2>
        <p class="blog-post-meta">{{ $task->created_at->format('d.m.Y H:i:s') }}</p>

        {{ $task->body }}
</div>