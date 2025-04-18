<?php

namespace App\Services\users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class editDataUserService
{
    public function editData(int $id, string $name, string $email, string $password): void
    {
        $user = User::findOrFail($id);

        $user->name = $name;
        $user->email = $email;
        if (!Hash::check($password, $user->password)) {
            $user->password = Hash::make($password);
        }
        $user->save();
    }
}
