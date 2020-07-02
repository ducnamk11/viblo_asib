<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Service\UserService;

/**
 * @todo Chỉnh lại cho chuẩn PSR
 */
class AccountController extends Controller
{
    public function index()
    {
        return view('users.account.index', [
            'posts' => user()->posts()->get(),
        ]);
    }

    public function showEditForm()
    {
       return view('users.account.edit');
    }

    public function Edit(Request $request)
    {
        $avatar = '';
          if($request->hasFile('avatar')){
            $avatar = time().'.'.$request->file('avatar')->getClientOriginalExtension();
             $request->file('avatar')->move('avatars',$avatar);
        }; 
        
           user()->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'avatar'=>$avatar,
        ]);
        return redirect()->route('user.account.index');
    }

 
}