<?php

namespace App\Services\tasks;

use App\Models\Task;
use App\Services\notificationsLogs\createTaskLogsService;
use Illuminate\Support\Facades\Auth;
use App\Constants\StatusConstants;

class createTaskService
{
        protected $createTaskLogsService;
    public function __construct(createTaskLogsService $createTaskLogsService)
    {
        $this->createTaskLogsService = $createTaskLogsService;
    }
    public function createTask(string $name, string $area, int $executor, string $description, int $creator): void
    {
        $task = Task::create([
            'name' => $name,
            'description' => $description,
            'creator_id' => $creator,
            'executor_id' => $executor,
            'area' => $area,
            'status' => StatusConstants::NEW,
            'in_work_start_time' => null
        ]);

        $trigger_type = 'created';
        $this->createTaskLogsService->createTaskLog($area, $executor, $creator, $task, $trigger_type, '');
    }
}
