<?php

namespace App\Services\comments;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Services\notificationsLogs\createTaskLogsService;
use App\Models\Task;
use App\Constants\TriggerConstants;

class addCommentService
{
        protected $createTaskLogsService;
    public function __construct(createTaskLogsService $createTaskLogsService)
    {
        $this->createTaskLogsService = $createTaskLogsService;
    }
    public function addComment(string $comment, int $authUser, int $taskid): void
    {
        $newComment = Comment::create([
            'task_id' => $taskid,
            'user_id' => $authUser,
            'text' => $comment
        ]);

        $task = Task::findOrFail($taskid);

        $trigger_type = TriggerConstants::NEW_COMMENT;
        $this->createTaskLogsService->createTaskLog($task->area, $task->executor_id, $task->creator_id, $task, $trigger_type, $comment);
    }
}
