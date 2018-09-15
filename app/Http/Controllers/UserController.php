<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function list()
    {
        $users = User::all();
        
        return view('user.list', compact('users'));
    }

    public function edit(User $user)
    {       
        $roles = Role::all();

        return view('user.edit', compact('user', 'roles'));
    }

    public function add(User $user)
    {       
        $roles = Role::all();

        return view('user.add', compact('roles'));
    }

    public function save(Request $request)
    {
        if ($request->has('id')) {
            $user = User::findOrFail($request->id);
            $user->update($request->all());
        } else {
            User::create($request->all());
        }
        return redirect()->route('admin.user.list');
    }

    public function delete(User $user)
    {
        if ($user->role->role_name != 'Admin') {
            $user->delete();
        }
        
        return redirect()->route('admin.user.list');
    }
}
