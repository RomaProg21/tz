<?php

namespace App\Services\users;

use Illuminate\Support\Facades\Hash;
use App\Models\User;


    class createUserService
        {
            public function createUser($name,$email,$password)
            {


                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($password)
                ]);
                

                return $user;
            }
        }
