<?php

namespace App\Http\Controllers\apiControllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

    class getUsersController extends Controller
        {
            public function __invoke(Request $request)
            {
                $users = User::all();
                return response()->json(['users'=>$users]);
            }
        }
