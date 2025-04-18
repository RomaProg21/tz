<?php

namespace App\Http\Controllers\apiControllers\users;

use App\Http\Controllers\Controller;
use App\Services\users\getUsersService;
use Illuminate\Http\JsonResponse;

class getUsersController extends Controller
{
        protected $getUsersService;
    public function __construct(getUsersService $getUsersService)
    {
        $this->getUsersService = $getUsersService;
    }
    public function __invoke(): JsonResponse
    {
        try {
            $users = $this->getUsersService->getUsers();

            return response()->json(['users' => $users]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
