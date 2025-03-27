<?php

namespace App\Http\Controllers\apiControllers\notifications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\notificationsLogs\getNotificationsService;

    class getNotificationsController extends Controller
        {
            protected $getNotificationsService;
            public function __construct(getNotificationsService $getNotificationsService){
                $this->getNotificationsService = $getNotificationsService;
            }
            public function __invoke(Request $request)
            {
                $userid = $request->get('userid');

                $notifications = $this->getNotificationsService->getNotifications($userid);

                
                return response()->json(['notifications'=>$notifications]);
            }
        }
