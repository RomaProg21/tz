<?php

namespace App\Services\notificationsLogs;

use App\Models\NotificationsLog;
use Illuminate\Support\Collection;

class getNotificationService
{
    public function getNotification(int $userid, int $notificationId): Collection
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
