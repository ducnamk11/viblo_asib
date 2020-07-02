<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maklad\Permission\Models\Permission;

/**
 * @todo Thiết kế class không chuẩn xem xét lại class này (Phần đặt tên và namespace)
 * @todo Xóa các dependency không dùng tới
 */
class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permission.index',
            [
                'permissions' => Permission::all(),
            ]);
    }

    public function store(Request $request)
    {
        Permission::create(['name' => $request->permission]);
        return redirect()->route('admin.permission');
    }

    public function delete($_id)
    {
        Permission::destroy($_id);
        return redirect()->route('admin.permission');
    }
}
