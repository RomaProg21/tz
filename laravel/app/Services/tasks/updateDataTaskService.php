<?php

namespace App\Services\tasks;

use App\Models\Task;
use App\Services\notificationsLogs\createTaskLogsService;
use App\Constants\StatusConstants;
use App\Constants\TriggerConstants;

class updateDataTaskService
{
        protected $createTaskLogsService;
    public function __construct(createTaskLogsService $createTaskLogsService)
    {
        $this->createTaskLogsService = $createTaskLogsService;
    }
    public function updateDataTask(int $id, string $description, string $newStatus, int $executorId): void
    {

        $task = Task::findOrFail($id);

            $oldTaskStatus = $task->status;
        if ($newStatus === StatusConstants::IN_WORK && (StatusConstants::NEW || $task->status == StatusConstants::ACCEPTED || $task->status == StatusConstants::POSTPONED)) {
            $task->setInWork();
        } else {
            if ($task->status === StatusConstants::IN_WORK) {
                $task->end_work_date = now();
            }
            $task->status = $newStatus;
        }

            $task->description = $description;
            $task->executor_id = $executorId;
            $timeInWork = $task->getTimeInWork();
            $task->save();

        if ($newStatus != $oldTaskStatus) {
            $trigger_type = TriggerConstants::STATUS_CHANGED;
            $this->createTaskLogsService->createTaskLog($task->area, $task->executor_id, $task->creator_id, $task, $trigger_type, $oldTaskStatus);
        }
    }
}
