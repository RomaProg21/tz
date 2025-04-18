<?php

namespace App\Services\notificationsLogs;

use App\Models\NotificationsLog;
use Illuminate\Support\Collection;

class getNotificationsService
{
    public function getNotifications(int $userid): Collection
    {
        $notifications = NotificationsLog::where('recipient', $userid)
        ->where('checked', 0)
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
