<?php

namespace App\Services\notificationsLogs;

use App\Models\NotificationsLog;


    class getNotificationsService
        {
            
            public function getNotifications($userid)
            {
                
                $notifications = NotificationsLog::where(function ($query) use ($userid) {
                    $query->where('creator_id', $userid)
                          ->orWhere('executor_id', $userid);
                })
                ->where('checked', 0)
                ->groupBy('task_id')
                ->get()
                ->map(function ($notification) {
                    return [
                        'notification' => $notification,
                        'time' => $notification->getTimeSinceCreationAttribute(),
                    ];
                });

                
                return $notifications;
            }
        }
