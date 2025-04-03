<?php

namespace App\Services\tasks;

use App\Models\Task;

use App\Services\notificationsLogs\createTaskLogsService;

use Illuminate\Support\Facades\Auth;


    class createTaskService
        {
            protected $createTaskLogsService;
            public function __construct(createTaskLogsService $createTaskLogsService){
                $this->createTaskLogsService = $createTaskLogsService;
            }
            public function createTask($name, $area, $executor, $description, $creator)
            {
                $task = Task::create([
                    'name' => $name,
                    'description' => $description,
                    'creator_id' => $creator,
                    'executor_id' => $executor,
                    'area' => $area,
                    'status' => 'новая',
                    'in_work_start_time' => null
                ]);
                //оповещение
                $trigger_type = 'created';
                $this->createTaskLogsService->createTaskLog($area, $executor, $creator, $task, $trigger_type, '');

                //---


                return $task;
            }
        }
