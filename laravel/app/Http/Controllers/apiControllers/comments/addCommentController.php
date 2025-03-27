<?php

namespace App\Http\Controllers\apiControllers\comments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\comments\addCommentService;

    class addCommentController extends Controller
        {
            protected $addCommentService;
            public function __construct(addCommentService $addCommentService){
                $this->addCommentService = $addCommentService;
            }
            public function __invoke(Request $request)
            {

                $comment = $request->get('comment');
                $authUser = $request->get('authUser');
                $taskid = $request->get('taskid');
                
                $newComment = $this->addCommentService->addComment($comment, $authUser, $taskid);

                
                return response()->json(['newComment'=>$newComment]);
            }
        }
