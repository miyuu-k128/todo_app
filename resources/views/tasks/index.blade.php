<!DOCTYPE html>
<html>
<head>
    <title>ToDo</title>
</head>
<body>

<h1>ToDoリスト</h1>

<form method="POST" action="/tasks">
    @csrf
    <input type="text" name="title">
    <button type="submit">追加</button>
</form>

<ul>
@foreach($tasks as $task)
    <li>
        {{ $task->title }}

        @if(!$task->is_done)
        <form method="POST" action="/tasks/{{ $task->id }}/done" style="display:inline;">
            @csrf
            <button>完了</button>
        </form>
        @endif

        <form method="POST" action="/tasks/{{ $task->id }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button>削除</button>
        </form>
    </li>
@endforeach
</ul>

</body>
</html>