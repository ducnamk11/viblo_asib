<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentPost;
use App\Services\Post\PostManager;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

/**
 * @todo Xóa các dependency không dùng tới
 */
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