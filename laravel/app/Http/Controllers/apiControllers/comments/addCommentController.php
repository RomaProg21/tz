<?php

namespace App\Http\Controllers\apiControllers\comments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\comments\addCommentService;
use Illuminate\Http\JsonResponse;

class addCommentController extends Controller
{
        protected $addCommentService;
    public function __construct(addCommentService $addCommentService)
    {
        $this->addCommentService = $addCommentService;
    }
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $comment = $request->get('comment');
            $authUser = $request->get('authUser');
            $taskid = $request->get('taskid');

            $this->addCommentService->addComment($comment, $authUser, $taskid);

            return response()->json(['message' => 'Comment created successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
