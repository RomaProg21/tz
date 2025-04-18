<?php

namespace App\Http\Controllers\apiControllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\users\editDataUserService;
use Illuminate\Http\JsonResponse;

class editDataUserController extends Controller
{
        protected $editDataUserService;
    public function __construct(editDataUserService $editDataUserService)
    {
        $this->editDataUserService = $editDataUserService;
    }
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $id = $request->get('id');
            $name = $request->get('name');
            $email = $request->get('email');
            $password = $request->get('password');

            $this->editDataUserService->editData($id, $name, $email, $password);

            return response()->json(['message' => 'User edited'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
