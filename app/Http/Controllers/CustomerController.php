<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;

use App\Models\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $model)
    {
        $users = $model
            ->select('users.*', 'roles.id AS role_id', 'roles.name AS role_name')
            ->leftJoin('roles', 'users.role', '=', 'roles.id')
            ->paginate(15);


        return view('customer.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::pluck('name','id')->all();
        return view('customer.create', [
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('name','id')->all();
        return view('customer.edit', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
