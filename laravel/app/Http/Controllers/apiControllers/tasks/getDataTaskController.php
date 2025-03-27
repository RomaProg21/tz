<?php

namespace App\Http\Controllers\apiControllers\tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\tasks\getDataTaskService;

    class getDataTaskController extends Controller
        {
            protected $getDataTaskService;
            public function __construct(getDataTaskService $getDataTaskService){
                $this->getDataTaskService = $getDataTaskService;
            }
            public function __invoke(Request $request)
            {
                $id = $request->get('id');
                $task = $this->getDataTaskService->getDataTask($id);

                return response()->json(['task'=>$task[0],'timeInWork'=>$task[1] ]);
            }
        }
