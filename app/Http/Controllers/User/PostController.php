<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\StoreCommentPost;
use App\Http\Controllers\PostManager;

class PostController extends Controller
{
    public function index()
    {
        return view('users.account.index', [
            'posts' => user()->posts()->paginate(8),
        ]);
    }

    public function create()
    {
        return view('users.post.create');
    }

    /**
     * @param StorePostRequest $request
     * @return void
     */
    public function store(StorePostRequest $request, PostManager $post)
    {
        $post->create(array_merge($request->all(), [
            'status' => Post::NOT_PUBLISHED,
            'slug'   => Str::slug($request->title),
        ]), user());

        return redirect()->route('user.account.index');
    }
 
}