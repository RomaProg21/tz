<?php

namespace App\Services\users;

use App\Models\User;

    class editDataUserService
        {
            public function editData($id,$name,$email,$password)
            {
                $user = User::find($id);

                if($user){
                    $user->name = $name;
                    $user->email = $email;
                    $user->password = $password;
                    $user->save();
                } else {
                    $user = null;
                }
                return $user;
            }
        }
