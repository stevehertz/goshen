<?php

namespace App\Repositories;

use App\Models\User;

class OrderRepository
{
    public function getUserOrders(User $user)
    {
        return $user->order()->latest()->get();
    }
}
