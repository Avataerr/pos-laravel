<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $today = Carbon::now('Asia/Manila')->startOfDay();

        $yesterday = $today->copy()->subDay()->toDateString();
        $todayDate = $today->toDateString();
        $tomorrow = $today->copy()->addDay()->toDateString();

        $tasks = [
            ['title' => 'Finish the task migration', 'status' => 'completed', 'task_date' => $yesterday],
            ['title' => 'Review the lesson notes', 'status' => 'completed', 'task_date' => $yesterday],

            ['title' => 'Check the Welcome page', 'status' => 'pending', 'task_date' => $todayDate],
            ['title' => 'Review the task list', 'status' => 'pending', 'task_date' => $todayDate],
            ['title' => 'Update the project notes', 'status' => 'completed', 'task_date' => $todayDate],

            ['title' => 'Prepare the lab submission', 'status' => 'pending', 'task_date' => $tomorrow],
            ['title' => 'Check the Profile page', 'status' => 'pending', 'task_date' => $tomorrow],
            ['title' => 'Plan the next project task', 'status' => 'pending', 'task_date' => $tomorrow],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}