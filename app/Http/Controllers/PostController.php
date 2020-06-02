<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getLatestPost(int $postNum = 4)
    {
        return Post::with('user')->where('status', Post::PUBLISHED)->latest()->take($postNum)->get();
    }

    public function index()
    {
        return view('home.index', [
            'posts' => Post::with('user')->paginate(10),
            'new_post' => $this->getLatestPost()]);
    }

    public function postDetail($_id)
    {
        return view('home.post', [
            'post' => Post::FindOrFail($_id),
            'new_post' => $this->getLatestPost()]);
    }

    public function create()
    {
        return view('users.post.create');
    }

    /**
     * Create post from user request
     *
     * @todo chuyển phương thức này vào \App\Http\Controller\User\PostController
     *
     * @param \App\Http\Requests\StorePostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePostRequest $request)
    {
        /**
         * sử dụng relationship để tạo post
         * thuộc tính user_id sẽ tự động điền
         * @see https://github.com/ducnamk11/viblo_asib/blob/dev/example.php
         */
        user()->posts()->create($request->all());

        return redirect()->route('index');
    }

}
