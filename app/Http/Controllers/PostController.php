<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $post;

    /**
     * PostController constructor.
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
        $this->new_post = $post->with('user')
            ->orderBy('created_at', 'desc')
            ->take(4)->get();
    }

    public function index()
    {
        $new_post = $this->new_post;
        $posts = $this->post->with('user') ->paginate(10);
        return view('frontend.index', compact('posts', 'new_post'));
    }

    /**
     * @param $_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function post_detail($_id)
    {
        $new_post = $this->new_post;
        $post = $this->post->where('_id', $_id)->first();
        return view('frontend.post', compact('new_post', 'post'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $right_menu = true;
        $new_post = $this->new_post;
        return view('frontend.post_create', compact('new_post', 'right_menu'));
    }

    /**
     * @param StorePostRequest $request
     */
    public function store( StorePostRequest $request)
    {

    }

}
