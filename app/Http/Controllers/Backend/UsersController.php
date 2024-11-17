<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Repositories\UsersRepository;

class UsersController extends Controller
{
    //
    private $usersRepository;
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function index()
    {
        $data = $this->usersRepository->getAllUsers();
        return view('backend.users.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('backend.users.edit');
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->except("_token");
        $user = $this->usersRepository->storeUser($data);
        if($user)
        {
            return response()->json([
                'status' => true,
                'message' => 'User created'
            ]);
        }
    }


    public function destroy(User $user)
    {
        if($this->usersRepository->destroyUser($user))
        {
            return response()->json([
                'status' => true,
                'message' => 'Successfully removed user'
            ]);
        }
    }
}
