<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Service\UserService;

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
        $avatar = 'https://lh3.googleusercontent.com/proxy/faKA8U54re28_oATcXuzDAlI0KVEIXm0YTfLUIGNch5rWjR21Y2DXfQh7P_DNp4Uu3yzSqCaXM50GGEyse5Q24p5hadqyLBiC7Vl4crtZXGsl7xeebeZDw';
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