<?php

namespace App\Http\Controllers\User;

use App\Models\User;
 use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
         return view('users.account.index' );
    }
}
