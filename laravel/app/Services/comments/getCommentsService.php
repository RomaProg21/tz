<?php

namespace App\Services\comments;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

    class getCommentsService
        {
            public function getComments($id)
            {
                $comments = Comment::with('user')->where('task_id',$id)->get();

                return $comments;
            }
        }
