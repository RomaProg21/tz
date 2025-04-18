<?php

namespace App\Http\Controllers\apiControllers\tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\tasks\updateDataTaskService;
use Illuminate\Http\JsonResponse;

class updateDataTaskController extends Controller
{
        protected $updateDataTaskService;
    public function __construct(updateDataTaskService $updateDataTaskService)
    {
        $this->updateDataTaskService = $updateDataTaskService;
    }
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $id = $request->get('id');
            $description = $request->get('description');
            $status = $request->get('status');
            $executorId = $request->get('executorId');

            $this->updateDataTaskService->updateDataTask($id, $description, $status, $executorId);

            return response()->json(['message' => 'Task edited'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
