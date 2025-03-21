<?php

namespace App\Http\Controllers\apiControllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\users\createUserService;

    class createUserController extends Controller
        {
            protected $createUserService;
            public function __construct(createUserService $createUserService){
                $this->createUserService = $createUserService;
            }
            public function __invoke(Request $request)
            {
                $name = $request->get('name');
                $email = $request->get('email');
                $password = $request->get('password');


                $user = $this->createUserService->createUser($name,$email,$password);

                
                return response()->json(['user'=>$user]);
            }
        }
