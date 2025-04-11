<?php

namespace App\Http\Controllers\apiControllers\tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\tasks\getAllTasksService;

    class getAllTasksController extends Controller
        {
            protected $getAllTasksService;
            public function __construct(getAllTasksService $getAllTasksService){
                $this->getAllTasksService = $getAllTasksService;
            }
            public function __invoke(Request $request)
            {

                $tasks = $this->getAllTasksService->getAllTasks();

                return response()->json(['tasks'=>$tasks]);
            }
        }
