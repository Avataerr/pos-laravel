<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Carbon;

class TaskController extends Controller
{
    public function today()
    {
        $today = Carbon::now('Asia/Manila')->toDateString();

        $tasks = Task::whereDate('task_date', $today)
            ->orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('tasks.today', ['tasks' => $tasks]);
    }

    public function index()
    {
        $tasks = Task::orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('tasks.index', ['tasks' => $tasks]);
    }
}