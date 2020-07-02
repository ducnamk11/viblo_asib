<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @todo xóa các dependency và debug flag không dùng tới
 */
class LogController extends Controller
{
    public function getVotedPost()
    {
        // dd(user()->votes()->get());
        return view('users.account.voted-post',[
            'votes'=> user()->votes->where('vote',1),
        ] );
    }
    public function getCommentedPost()
    {
        return view('users.account.commented-post',[
            'comments'=> user()->comments,
        ] );
    }
}