@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h2>Task List</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Task Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ ucfirst($task->status) }}</td>
                    <td>{{ $task->task_date->format('M d, Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No tasks have been added.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection