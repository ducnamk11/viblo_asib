<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\User;
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
        return view('admin.post.view', [
            'post' => Post::findOrFail($_id),
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
        Post::where('_id', $_id)->update(array_merge($request->all(), [
            'status' => Post::NOT_PUBLISHED,
            'slug' => Str::slug($request->title),
            'user_id' => Post::findOrFail($_id)->user_id,
            'find_key' => Post::findOrFail($_id)->find_key
        ]));

        return redirect()->route('admin.post');
    }


    public function delete($_id)
    {
        Post::destroy($_id);

        return redirect()->route('admin.post');
    }

    public function publish(Request $request, $_id) // @todo Clean code
    {
        $post = Post::findOrFail($_id);

        if ($post->status == Post::NOT_PUBLISHED) {
            $post->status = Post::PUBLISHED;
        } else {
            $post->status = Post::NOT_PUBLISHED;
        }

        $post->update(array_merge($request->all(), [
            'find_key' => $post->find_key,
            'status' => $post->status,
            'slug' => Str::slug($request->title),
        ]));

        return redirect()->route('admin.post');
    }

}
