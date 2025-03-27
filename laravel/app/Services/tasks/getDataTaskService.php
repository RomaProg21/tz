<?php

namespace App\Services\tasks;

use App\Models\Task;

    class getDataTaskService
        {
            public function getDataTask($id)
            {
            
                $task = Task::with(['creator_id','executor_id'])->find($id);
                if($task){
                    $timeInWork = $task->getTimeInWork();
                } else {
                    $task = null;
                }
                return [$task,$timeInWork];
            }
        }
