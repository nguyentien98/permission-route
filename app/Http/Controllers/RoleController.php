<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;

class RoleController extends Controller
{
    public function list()
    {
        $roles = Role::all();

        return view('role.list', compact('roles'));
    }

    public function add()
    {
        $saved_routes = Permission::name()->get();

        return view('role.add', compact('saved_routes'));
    }

    public function edit(Role $role)
    {
        $saved_routes = Permission::name()->get();

        return view('role.edit', compact('saved_routes', 'role'));
    }

    public function save(Request $request)
    {
        $role = Role::updateOrCreate([
            'role_name' => $request->role_name
        ]);
        $role->permissions()->sync($request->routes);

        return redirect()->route('admin.role.list');
    }

    public function delete(Role $role)
    {
        $role->permissions()->detach();
        $role->delete();

        return redirect()->route('admin.role.list');
    }
}
