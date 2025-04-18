<?php

namespace App\Services\users;

use App\Models\User;
use Illuminate\Support\Collection;

class getUsersService
{
    public function getUsers(): Collection
    {
        $users = User::all();
        return $users;
    }
}
