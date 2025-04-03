<?php

namespace App\Http\Controllers\apiControllers\notifications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\notificationsLogs\getNotificationService;

    class getNotificationController extends Controller
        {
            protected $getNotificationService;
            public function __construct(getNotificationService $getNotificationService){
                $this->getNotificationService = $getNotificationService;
            }
            public function __invoke(Request $request)
            {
                $userid = $request->get('userid');
                $notificationId = $request->get('id');

                $notification = $this->getNotificationService->getNotification($userid, $notificationId);

                
                return response()->json(['notification'=>$notification]);
            }
        }
