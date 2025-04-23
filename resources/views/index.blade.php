<div>
    <h1> The list of tasks</h1>
</div>

<div>
    <h2>hello, I am blade template!</h2>

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>There is no tasks</div>
    @endforelse
</div>
