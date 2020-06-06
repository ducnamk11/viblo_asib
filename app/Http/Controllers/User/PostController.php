<?php

namespace App\Http\Controllers\User;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;
use Str;
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
     * 
     *
     * @param StorePostRequest $request
     * @return void
     */
    public function store(StorePostRequest $request)
    {
 
        $post = user()->posts()->create([
                'user_id'=>Auth::user()->_id, 
                'title'=>$request->title, 
                'content'=>$request->content, 
                'slug'=>Str::slug($request->title),
                 'status'=>0,
               ]);
         $this->increaseFindKey($post); return redirect()->route('user.account.index');
        // $request->slug = Str::slug($request->title);   
        // $post = user()->posts()->create($request->all());
        //  $this->increaseFindKey($post);
        // return redirect()->route('user.account.index');
    }

    /**
     * Tự động tăng dần số trong field find_key
     * Mục đích: Rút gọn Url
     * 
     * @param \App\Models\Post $post
     * @return \App\Models\Post
     */
    private function increaseFindKey(Post $post)
    {
        $lastPost = $this->lastestPost();
        $post->find_key = $lastPost ? $lastPost->find_key + 1 : 0;
        return tap($post, function ($post) {
            $post->save();
        });
    }

    private function lastestPost()
    {
        return Post::whereNotNull('find_key')->latest()->skip(1)->first();
    }
}