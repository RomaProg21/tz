<?php

namespace App\Http\Controllers\apiControllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\users\createUserService;
use Illuminate\Support\Facades\Validator;

use Illuminate\Validation\Rule;

    class createUserController extends Controller
        {
            protected $createUserService;
            public function __construct(createUserService $createUserService){
                $this->createUserService = $createUserService;
            }
            public function __invoke(Request $request)
            {
                
                $validator = Validator::make($request->all(), [
                    'email' => [
                        'required',
                        'string',
                        'email',
                        'max:255',
                        Rule::unique('users', 'email'), 
                    ],
                ]);
                
                if ($validator->fails()) {
                    return response()->json(['errors' => $validator->errors()], 422); // 422 Unprocessable Entity
                }

                $name = $request->get('name');
                $email = $request->get('email');
                $password = $request->get('password');

                $user = $this->createUserService->createUser($name,$email,$password);

                
                return response()->json(['user'=>$user]);
            }
        }
