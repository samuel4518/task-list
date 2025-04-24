@extends('layouts.app')

@section('title', 'The list of Tasks')

<div>
    @section('content')
        <h2>hello, I am blade template!</h2>

        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
            </div>
        @empty
            <div>There is no tasks</div>
        @endforelse
    @endsection
</div>
