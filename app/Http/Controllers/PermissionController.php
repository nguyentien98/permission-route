<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
use App\Helpers\Permission as PermissionTrait;
use App\Permission;

class PermissionController extends Controller
{
    use PermissionTrait;

    public function list()
    {
        $all_routes = $this->getAllRoute('admin');
        $saved_routes = Permission::getRoutes();

        return view('permission.list', compact('all_routes', 'saved_routes'));
    }

    public function save(Request $request)
    {
        Permission::savePermission($request->routes);

        return redirect()->back();
    }
}
