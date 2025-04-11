<?php

namespace App\Services\notificationsLogs;

use App\Models\NotificationsLog;



    class checkNotificationService
        {
            
            public function checkNotification($id)
            {
                
                $notification = NotificationsLog::find($id);

                $notification->checked = 1;

                $notification->save();
                
                return $notification;
            }
        }
