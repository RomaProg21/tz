<?php

namespace App\Services\tasks;

use App\Models\Task;

    class getAllTasksService
        {
            public function getAllTasks()
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
