<?php

namespace App\Services\tasks;

use App\Models\Task;
use App\Services\notificationsLogs\createTaskLogsService;

    class updateDataTaskService
        {
            protected $createTaskLogsService;
            public function __construct(createTaskLogsService $createTaskLogsService){
                $this->createTaskLogsService = $createTaskLogsService;
            }
            public function updateDataTask($id, $description, $status, $executorId)
            {
            
                $task = Task::find($id);


                if($task){
                    if($status != $task->status){
                        $trigger_type = 'status_changed';
                        $this->createTaskLogsService->createTaskLog($task->area, $task->executor_id, $task->creator_id, $task->id, $trigger_type);

                    }
                    if ($status === 'в работе' && ($task->status =='новая' || $task->status =='новая')) {
                        $task->setInWork();
                    } else {
                        if($task->status === 'в работе') {
                            $task->end_work_date = now();
                        }
                        $task->status = $status;
                    }

                    $task->description = $description;
                    $task->executor_id = $executorId;
                    $timeInWork = $task->getTimeInWork();
                    $task->save();
                } else {
                    $task = null;
                }
                return [$task,$timeInWork];
            }
        }
