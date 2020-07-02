<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;
use App\Http\Controllers\Controller;
/**
 * @todo Thiết kế class không chuẩn xem xét lại class này (Phần đặt tên và namespace)
 */
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

    public function delete($_id)
    {
        Role::destroy($_id);
        return redirect()->route('admin.role');
    }
}
