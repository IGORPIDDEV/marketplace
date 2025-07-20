<?php

namespace App\Services\Auth;

use App\DTO\Auth\RegisterData;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterService
{
    public function register(RegisterData $data): User
    {
        return User::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => Hash::make($data->password),
        ]);
    }
}
