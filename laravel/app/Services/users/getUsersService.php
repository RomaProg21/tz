<?php

namespace App\Services\users;

use App\Models\User;

    class getUsersService
        {
            public function getUsers()
            {
                $users = User::all();
                return $users;
            }
        }
