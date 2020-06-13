<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentPost;
use App\Http\Controllers\PostManager;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
  public function postComment(StoreCommentPost $request, $slug)
    { 
        $postCurrent = PostManager::findBySlug($slug) ;
            user()->comments()->create([
                'user_id' => Auth::user()->_id,
                'post_id' => $postCurrent->_id,
                'parent_id' => $request->parent_id,
                'content' => $request->content,
        ]);
        return back();
    }
}