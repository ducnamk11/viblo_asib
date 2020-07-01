<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index',
            [
                'roles' => Role::all(),
                'permissions' => Permission::all(),
            ]);
    }

    public function store(Request $request)
    {
        if (count(Permission::all()) > 0) {
            $role = Role::firstOrCreate(['name' => $request->role]);
            $role->givePermissionTo($request->permission);
            return redirect()->route('admin.role');
        }
    }

    public function delete(Request $request, $id)
    {
        $role = $role->create(['name' => $request->role]);
        $role->givePermissionTo($request->permission);
        return back();
    }
}
