<?php

namespace App\Http\Controllers\apiControllers\notifications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\notificationsLogs\checkNotificationService;
use Illuminate\Http\JsonResponse;

class checkNotificationController extends Controller
{
        protected $checkNotificationService;
    public function __construct(checkNotificationService $checkNotificationService)
    {
        $this->checkNotificationService = $checkNotificationService;
    }
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $id = $request->get('id');

            $this->checkNotificationService->checkNotification($id);

            return response()->json(['message' => 'Successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
