<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //    $role = Role::create(['name' => 'admin']);
        // //    return $permission = Permission::create(['name' => 'edit articles']);
        // $role = Role::findByName('admin');
        // $permission = Permission::create(['name' => 'edit category']);
        // $role->givePermissionTo($permission);
        return view('admin.post.index',[
             'posts'=> Post::all(),
        ]);
    }
}
