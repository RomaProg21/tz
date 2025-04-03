<?php

namespace App\Services\notificationsLogs;

use App\Models\NotificationsLog;
use App\Models\Task;
use App\Models\User;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

    class createTaskLogsService
        {
            
            public function createTaskLog($area, $executor, $creator, $task, $trigger_type, $addition)
            {
                $recipientEmails = [];
                $usersid = [];
                $creatorUser = User::find($creator); 
                $executorUser = User::find($executor); 

                if($area == 'личная'){

                    if ($creatorUser) {
                        $recipientEmails[] = $creatorUser->email;
                        $usersid[] = $creatorUser->id;
                    }
                
                    if ($executor) {
                        if ($executorUser) {
                            $recipientEmails[] = $executorUser->email;
                            $usersid[] = $executorUser->id;
                        }
                    }
                
                    $recipientEmails = array_unique($recipientEmails);
                    $usersid = array_unique($usersid);

                } elseif($area == 'компания'){
                    $recipientEmails = User::pluck('email')->toArray();
                    $usersid = User::pluck('id')->toArray();
                }
                //---
                //email
                if($trigger_type == 'created'){
                    $title = 'Создание задачи';
                    $content = "$creatorUser->name назначил задачу $executorUser->name";
                } 
                if($trigger_type == 'status_changed'){
                    $title = 'Изменение статуса задачи';
                    $content = "$executorUser->name сменил статус задачи №$task->id с '$addition' на '$task->status'";
                } 
                if($trigger_type == 'new_comment'){
                    $title = 'Новый комментарий';
                    $content = "$creatorUser->name добавил комментарий к задаче №$task->id:$addition
                    ";
                }
            
                foreach($usersid as $recipient){

                    NotificationsLog::create([
                        'task_id' => $task->id,
                        'creator_id' => $creator,
                        'executor_id' => $executor,
                        'area' => $area,
                        'trigger_type'=> $trigger_type,
                        'recipients' => implode(', ', $recipientEmails),
                        'text' => $content,
                        'checked' => 0,
                        'recipient' => $recipient
                    ]);
                }
                    
                foreach($recipientEmails as $email){
                    Mail::to($email)->send(new MyMail($title, $content));

                }
                // Mail::to('roma12332189176739481@bk.ru')->send(new MyMail($title, $content));
            

                //---
            }
        }
