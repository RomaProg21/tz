<?php

namespace App\Http\Controllers\apiControllers\users;

use App\Http\Controllers\Controller;
use App\Services\users\getUsersService;

    class getUsersController extends Controller
        {
            protected $getUsersService;
            public function __construct(getUsersService $getUsersService){
                $this->getUsersService = $getUsersService;
            }
            public function __invoke()
            {
                $users = $this->getUsersService->getUsers();
                return response()->json(['users'=>$users]);
            }
        }
