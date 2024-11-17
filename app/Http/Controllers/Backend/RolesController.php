<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Role::withCount('users')->get();
        return view('backend.roles.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('backend.roles.edit');
    }

    public function store(Request $request)
    {
        // Validate role name
        $request->validate([
            'name' => 'required|string|unique:roles,name',
        ]);

        // Create the role
        $role = Role::create(['name' => $request->name]);

        return response()->json([
            'status' => true,
            'message' => "Role '{$role->name}' has been created successfully."
        ]);

    }
}
