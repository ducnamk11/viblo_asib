<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

/**
 * @todo Thiết kế class không chuẩn xem xét lại class này (Phần đặt tên và namespace)
 */
class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::all(),
        ]);
    }

    public function edit()
    {
        return view('admin.user.edit', [
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
}
