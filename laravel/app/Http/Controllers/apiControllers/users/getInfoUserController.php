<?php

namespace App\Http\Controllers\apiControllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\users\getInfoUserService;

    class getInfoUserController extends Controller
        {
            protected $getInfoUserService;
            public function __construct(getInfoUserService $getInfoUserService){
                $this->getInfoUserService = $getInfoUserService;
            }
            public function __invoke(Request $request)
            {
                $id = $request->get('id');

                $user = $this->getInfoUserService->getInfoUser($id);


                return response()->json(['user'=>$user]);
            }
        }
