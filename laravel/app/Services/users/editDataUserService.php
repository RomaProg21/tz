<?php

namespace App\Services\users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

    class editDataUserService
        {
            public function editData($id,$name,$email,$password)
            {
                $user = User::find($id);

                if($user){

                    $user->name = $name;
                    $user->email = $email;
                    if(!Hash::check($password, $user->password)){
                        $user->password = Hash::make($password);
                    }
                    $user->save();
                } else {
                    $user = null;
                }
                return $user;
            }
        }
