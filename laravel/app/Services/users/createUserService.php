<?php

namespace App\Services\users;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class createUserService
{
    public function createUser(string $name, string $email, string $password): void
    {


        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);
    }
}
