<?php

namespace App\Services\notificationsLogs;

use App\Models\NotificationsLog;
use App\Models\Task;
use App\Models\User;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

    class createTaskLogsService
        {
            
            public function createTaskLog($area, $executor, $creator, $taskid, $trigger_type)
            {
                $recipientEmails = [];
                $creatorUser = User::find($creator); 
                $executorUser = User::find($executor); 

                if($area == 'личная'){

                    if ($creatorUser) {
                        $recipientEmails[] = $creatorUser->email;
                    }
                
                    if ($executor) {
                        if ($executorUser) {
                            $recipientEmails[] = $executorUser->email;
                        }
                    }
                
                    $recipientEmails = array_unique($recipientEmails);


                } elseif($area == 'компания'){
                    $recipientEmails = User::pluck('email')->toArray();
                }
                //---

                //email
                if($trigger_type == 'created'){
                    $title = 'Создание задачи';
                    $content = "$creatorUser->name назначил задачу $executorUser->name";
                } 
                if($trigger_type == 'status_changed'){
                    $title = 'Изменение статуса задачи';
                    $content = "$executorUser->name сменил статус задачи №$taskid";
                } 
                if($trigger_type == 'new_comment'){
                    $title = 'Новый комментарий';
                    $content = "$creatorUser->name добавил комментарий к задаче №$taskid";
                }
            
                NotificationsLog::create([
                    'task_id' => $taskid,
                    'creator_id' => $creator,
                    'executor_id' => $executor,
                    'area' => $area,
                    'trigger_type'=> $trigger_type,
                    'recipients' => implode(', ', $recipientEmails),
                    'text' => $content,
                    'checked' => 0,
                ]);
                
                foreach($recipientEmails as $email){
                    Mail::to($email)->send(new MyMail($title, $content));

                }
                // Mail::to('roma12332189176739481@bk.ru')->send(new MyMail($title, $content));
            

                //---
            }
        }
