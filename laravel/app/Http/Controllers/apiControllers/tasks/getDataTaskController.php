<?php

namespace App\Http\Controllers\apiControllers\tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\tasks\getDataTaskService;
use Illuminate\Http\JsonResponse;

class getDataTaskController extends Controller
{
        protected $getDataTaskService;
    public function __construct(getDataTaskService $getDataTaskService)
    {
        $this->getDataTaskService = $getDataTaskService;
    }
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $id = $request->get('id');
            $task = $this->getDataTaskService->getDataTask($id);

            $timeInWork = $task->getTimeInWork();

            return response()->json(['task' => $task,'timeInWork' => $timeInWork]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
