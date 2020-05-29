<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getLatestPost(int $postNum = 4)
    {
        return Post::with('user')->where('status',0)->latest()->take($postNum)->get();
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

    public function store(StorePostRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'status' => 0,
            'user_id' => $request->user()->id,
        ]);
        return redirect()->route('index');
    }
}
