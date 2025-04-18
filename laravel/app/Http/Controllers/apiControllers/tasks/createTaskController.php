<?php

namespace App\Http\Controllers\apiControllers\tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\tasks\createTaskService;
use Illuminate\Http\JsonResponse;

class createTaskController extends Controller
{
        protected $createTaskService;
    public function __construct(createTaskService $createTaskService)
    {
        $this->createTaskService = $createTaskService;
    }
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $name = $request->get('name');
            $area = $request->get('area');
            $executor = $request->get('executor');
            $description = $request->get('description');
            $creator = $request->get('creator');

            $this->createTaskService->createTask($name, $area, $executor, $description, $creator);

            return response()->json(['message' => 'Task created successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
