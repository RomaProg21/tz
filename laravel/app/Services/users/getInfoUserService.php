<?php

namespace App\Services\users;

use App\Models\User;

class getInfoUserService
{
    public function getInfoUser(int $id): array
    {
        $user = User::findOrFail($id);

        return $user->toArray();
    }
}
