<x-mail::message>
# Создана новая задача: {{ $task->title }}

{{ $task->body }}

<x-mail::button :url="''">
Посмотреть задачу
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
