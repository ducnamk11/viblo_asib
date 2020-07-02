<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;


class UserManagerController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::all(),
        ]);
    }

    public function edit($_id)
    {
        return view('admin.user.edit', [
            'user'=> User::findOrFail($_id),
            'permissions' => Permission::all(),
            'roles' => Role::all(),
        ]);
    }

    public function update(Request $request, $_id)
    {

        $user = User::findOrFail($_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $user->syncPermissions($request->permission);
        $user->syncRoles($request->role);
        return redirect()->route('admin.user');
    }

    public function delete($_id)
    {
        User::destroy($_id);
        return redirect()->route('admin.user');
    }
}
