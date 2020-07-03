<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;


class PostManagerController extends Controller
{
    public function index()
    {
        return view('admin.post.index', [
            'posts' => Post::all(),
        ]);
    }

    public function view($_id)
    {
        $post = Post::findOrFail($_id);
        return view('admin.post.view', [
            'post' => $post,
        ]);
    }

    public function edit($_id)
    {
        $post = Post::findOrFail($_id);
        return view('admin.post.edit', [
            'post' => $post,
        ]);
    }

    public function update(StorePostRequest $request, $_id)
    {
//        $post = Post::findOrFail($_id);
//        $post->update(array_merge($request->all(), [
//            'find_key' => $post->find_key,
//            'status' => Post::NOT_PUBLISHED,
//            'slug' => Str::slug($request->title),
//        ]));

        return redirect()->route('admin.post');
    }

    public function delete($_id)
    {
        Post::destroy($_id);
        return redirect()->route('admin.post');
    }

    public function publish(Request $request,$_id) // @todo Clean code
    {
        $post = Post::findOrFail($_id);
        if ($post->status == 1) {
            $post->status = 0;
        } else {
            $post->status = 1; }
        $post->update(array_merge($request->all(), [
            'find_key' => $post->find_key,
            'status' => $post->status,
            'slug' => Str::slug($request->title),
        ]));

        return redirect()->route('admin.post');
    }

}
