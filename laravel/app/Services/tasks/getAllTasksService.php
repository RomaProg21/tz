<?php

namespace App\Services\tasks;

use App\Models\Task;
use Illuminate\Support\Collection;

class getAllTasksService
{
    public function getAllTasks(): Collection
    {
        $tasks = Task::with(['creator_id','executor_id'])->get()->map(function ($task) {
            return [
                'task' => $task,
                'time_in_work' => $task->getTimeInWork(),
            ];
        });

        return $tasks;
    }
}
