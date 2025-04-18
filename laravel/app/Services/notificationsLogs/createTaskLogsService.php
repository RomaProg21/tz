<?php

namespace App\Services\notificationsLogs;

use App\Models\NotificationsLog;
use App\Models\Task;
use App\Models\User;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;
use App\Constants\AreaConstants;
use App\Constants\TriggerConstants;

class createTaskLogsService
{
    public function createTaskLog(string $area, int $executor, int $creator, object $task, string $trigger_type, string $addition): void
    {
        $recipientEmails = [];
        $usersid = [];
        $creatorUser = User::findOrFail($creator);
        $executorUser = User::findOrFail($executor);

        if ($area == AreaConstants::PRIVATE) {
            if ($creatorUser) {
                $recipientEmails[] = $creatorUser->email;
                $usersid[] = $creatorUser->id;
            }

            if ($executor && $executorUser) {
                    $recipientEmails[] = $executorUser->email;
                    $usersid[] = $executorUser->id;
            }

            $recipientEmails = array_unique($recipientEmails);
            $usersid = array_unique($usersid);
        } elseif ($area == AreaConstants::COMPANY) {
            $recipientEmails = User::pluck('email')->toArray();
            $usersid = User::pluck('id')->toArray();
        }

        if ($trigger_type == TriggerConstants::CREATED) {
            $title = 'Создание задачи';
            $content = "$creatorUser->name назначил задачу $executorUser->name";
        }
        if ($trigger_type == TriggerConstants::STATUS_CHANGED) {
            $title = 'Изменение статуса задачи';
            $content = "$executorUser->name сменил статус задачи №$task->id с '$addition' на '$task->status'";
        }
        if ($trigger_type == TriggerConstants::NEW_COMMENT) {
            $title = 'Новый комментарий';
            $content = "$creatorUser->name добавил комментарий к задаче №$task->id:$addition
                    ";
        }

        foreach ($usersid as $recipient) {
            NotificationsLog::create([
                'task_id' => $task->id,
                'creator_id' => $creator,
                'executor_id' => $executor,
                'area' => $area,
                'trigger_type' => $trigger_type,
                'recipients' => implode(', ', $recipientEmails),
                'text' => $content,
                'checked' => 0,
                'recipient' => $recipient
            ]);
        }

        foreach ($recipientEmails as $email) {
            Mail::to($email)->send(new MyMail($title, $content));
        }
    }
}
