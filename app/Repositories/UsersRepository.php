<?php

namespace App\Repositories;

use App\Models\User;
use App\Mail\UserAccountCreated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsersRepository
{
    public function getAllUsers()
    {
        return User::where('id', '!=', Auth::user()->id)->latest()->get();
    }

    public function storeUser(array $attributes)
    {
        $password = '123456789';

        $user = User::create([
            'first_name' => data_get($attributes, 'first_name'),
            'last_name' => data_get($attributes, 'last_name'),
            'profile' => 'img/users/noimage.png',
            'phone' => data_get($attributes, 'phone'),
            'email' => data_get($attributes, 'email'),
            'password' => Hash::make($password)
        ]);

        // Send email
        Mail::to($user->email)->send(new UserAccountCreated($user, $password));

        return $user;
    }

    public function destroyUser(User $user)
    {
        return $user->delete();
    }
}
