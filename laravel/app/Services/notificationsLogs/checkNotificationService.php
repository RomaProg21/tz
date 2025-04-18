<?php

namespace App\Services\notificationsLogs;

use App\Models\NotificationsLog;

class checkNotificationService
{
    public function checkNotification(int $id): void
    {

        $notification = NotificationsLog::findOrFail($id);

        $notification->checked = 1;

        $notification->save();
    }
}
