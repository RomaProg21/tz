<?php

namespace App\Services\notificationsLogs;

use App\Models\NotificationsLog;


    class getNotificationService
        {
            
            public function getNotification($userid, $notificationId)
            {
                $notification = NotificationsLog::with(['executor','creator'])->where('recipient', $userid)
                ->where('id', $notificationId)
                ->get()
                ->map(function ($notification) {
                    return [
                        'notification' => $notification,
                        'time' => $notification->getTimeSinceCreationAttribute(),
                    ];
                });


                return $notification;
            }
        }
