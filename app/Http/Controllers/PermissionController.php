<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maklad\Permission\Models\Permission;
use Maklad\Permission\Models\Role;

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
}
