<?php

namespace App\Http\Controllers\User;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        return view('users.account.index', [
            'posts' => user()->posts()->paginate(8),
           // 'user' => user(), // Hàm này có thể gọi trực tiếp trong View k cần thiết thì đừng trả về nữa. ok 
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
        $post = user()->posts()->create($request->all());

        $this->increaseFindKey($post);

        return redirect()->route('index');
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
        return Post::lastest()->first();
    }
}