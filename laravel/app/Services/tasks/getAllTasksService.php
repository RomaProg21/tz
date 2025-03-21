<?php

namespace App\Services\tasks;

use Illuminate\Support\Facades\Hash;
use App\Models\Task;

    class getAllTasksService
        {
            public function getAllTasks()
            {
                $tasks = Task::with(['creator_id','executor_id'])->get();

                return $tasks;
            }
        }
