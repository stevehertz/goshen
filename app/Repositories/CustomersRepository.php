<?php

namespace App\Repositories;

use App\Models\User;

class CustomersRepository
{

    public function getAllCustomers()
    {
        return User::role('user')->latest()->get();
    }

}
