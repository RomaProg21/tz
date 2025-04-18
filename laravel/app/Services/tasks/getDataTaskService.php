<?php

namespace App\Services\tasks;

use App\Models\Task;

class getDataTaskService
{
    public function getDataTask(int $id): Task
    {

        $task = Task::with(['creator_id','executor_id'])->findOrFail($id);

        return $task;
    }
}
