<?php

namespace App\Http\Controllers\apiControllers\tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\tasks\createTaskService;

    class createTaskController extends Controller
        {
            protected $createTaskService;
            public function __construct(createTaskService $createTaskService){
                $this->createTaskService = $createTaskService;
            }
            public function __invoke(Request $request)
            {
                $name = $request->get('name');
                $area = $request->get('area');
                $executor = $request->get('executor');
                $description = $request->get('description');
                $creator = $request->get('creator');


                $task = $this->createTaskService->createTask($name, $area, $executor, $description,$creator);

                return response()->json(['task'=>$task]);
            }
        }
