<?php

namespace App\Services\comments;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Services\notificationsLogs\createTaskLogsService;
use App\Models\Task;


    class addCommentService
        {
            protected $createTaskLogsService;
            public function __construct(createTaskLogsService $createTaskLogsService){
                $this->createTaskLogsService = $createTaskLogsService;
            }
            public function addComment($comment, $authUser, $taskid)
            {
                $newComment = Comment::create([
                    'task_id' => $taskid,
                    'user_id' => $authUser,
                    'text' => $comment
                ]);
                
                $task = Task::find($taskid);

                $trigger_type = 'new_comment';
                $this->createTaskLogsService->createTaskLog($task->area, $task->executor_id, $task->creator_id, $task, $trigger_type, $comment);

                return $newComment;
            }
        }
