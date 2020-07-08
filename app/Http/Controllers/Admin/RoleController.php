<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:super-admin');
    }

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

    public function edit($_id)
    {
        return view('admin.role.edit', [
            'role' => Role::findOrFail($_id),
            'permissions' => Permission::all(),
        ]);
    }

    public function update(Request $request, $_id)
    {
        $role = Role::findOrFail($_id);
        $role->syncPermissions($request->permission);

        return redirect()->route('admin.role');
    }

    public function delete($_id)
    {
        Role::destroy($_id);

        return redirect()->route('admin.role');
    }
}
