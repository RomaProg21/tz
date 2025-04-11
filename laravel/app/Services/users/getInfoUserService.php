<?php

namespace App\Services\users;

use App\Models\User;

    class getInfoUserService
        {
            public function getInfoUser($id)
            {
                $user = User::find($id);

                if($user){
                    $user = $user->toArray();
                } else {
                    $user = null;
                }
                return $user;
            }
        }
