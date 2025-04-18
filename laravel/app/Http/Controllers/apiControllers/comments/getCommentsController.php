<?php

namespace App\Http\Controllers\apiControllers\comments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\comments\getCommentsService;
use Illuminate\Http\JsonResponse;

class getCommentsController extends Controller
{
        protected $getCommentsService;
    public function __construct(getCommentsService $getCommentsService)
    {
        $this->getCommentsService = $getCommentsService;
    }
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $id = $request->get('id');
            $comments = $this->getCommentsService->getComments($id);

            return response()->json(['comments' => $comments]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
