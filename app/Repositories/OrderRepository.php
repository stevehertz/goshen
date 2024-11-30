<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\User;

class OrderRepository
{
    public function getUserOrders(User $user)
    {
        return $user->order()->latest()->get();
    }

    public function getAllOrders()
    {
        return Order::latest()->get();
    }
}
