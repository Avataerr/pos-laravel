@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h2>Today's Tasks</h2>

    @forelse ($tasks as $task)
        <p>
            <strong>{{ $task->title }}</strong>
            — {{ ucfirst($task->status) }}
        </p>
    @empty
        <p>You have no tasks scheduled for today.</p>
    @endforelse
@endsection