<?php

namespace App\Services\comments;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class getCommentsService
{
    public function getComments(int $id): Collection
    {
        $comments = Comment::with('user')->where('task_id', $id)->get();

        return $comments;
    }
}
