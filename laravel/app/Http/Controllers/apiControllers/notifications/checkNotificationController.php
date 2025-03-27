<?php

namespace App\Http\Controllers\apiControllers\notifications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\notificationsLogs\checkNotificationService;

    class checkNotificationController extends Controller
        {
            protected $checkNotificationService;
            public function __construct(checkNotificationService $checkNotificationService){
                $this->checkNotificationService = $checkNotificationService;
            }
            public function __invoke(Request $request)
            {
                $id = $request->get('id');

                $notification = $this->checkNotificationService->checkNotification($id);

                
                return response()->json(['notification'=>$notification]);
            }
        }
