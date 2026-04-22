<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoリスト</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-stone-900 antialiased font-sans">

    <div class="max-w-md mx-auto mt-16 px-6">
        <header class="mb-12">
            <h1 class="text-3xl font-semibold tracking-tight text-stone-800">タスク管理</h1>
            <p class="text-xs text-stone-400 mt-2 uppercase tracking-[0.2em]">Daily Task Manager</p>
        </header>

        <form method="POST" action="/tasks" class="flex gap-4 mb-14">
            @csrf
            <input type="text" name="title" required
                   placeholder="新しいタスクを書き込む"
                   class="flex-1 py-3 bg-transparent border-b border-stone-200 focus:outline-none focus:border-stone-900 transition-colors placeholder-stone-300 text-base">
            <button type="submit" 
                    class="text-sm font-bold hover:bg-stone-900 hover:text-white transition border border-stone-900 px-5 py-2 rounded-full">
                追加
            </button>
        </form>

        <ul class="space-y-6">
            @foreach($tasks as $task)
                <li class="flex items-center justify-between group border-b border-stone-50 pb-4">
                    <span class="text-base {{ $task->is_done ? 'line-through text-stone-300' : 'text-stone-700 font-medium' }}">
                        {{ $task->title }}
                    </span>

                    <div class="flex gap-4 items-center">
                        @if(!$task->is_done)
                            <form method="POST" action="/tasks/{{ $task->id }}/done">
                                @csrf
                                <button class="text-xs text-stone-400 hover:text-stone-900 transition border-b border-transparent hover:border-stone-900">
                                    完了
                                </button>
                            </form>
                        @endif

                        <form method="POST" action="/tasks/{{ $task->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-xs text-stone-400 hover:text-stone-900 transition border-b border-transparent hover:border-stone-900">
                                削除
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>