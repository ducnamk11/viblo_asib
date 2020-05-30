<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Vì nhận thấy hầu hết method trong đây đều dùng $this->getLatestPost()
     * Nên ta sẽ share ở trong contruct luôn theo nguyên lý DRY, cai nay hieu roi , ok
     * 
     */
    public function __construct() {
        view()->share('new_post', $this->getLatestPost(4)); 
    }

    public function index()
    {
        return view('home.index', [
            'posts' => Post::with('user')->paginate(10),
        ]);
    }

    public function postDetail($_id)
    {
        return view('home.post', [
            'post' => Post::FindOrFail($_id),
        ]);
    }

    /**
     * Show the application dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    private function getLatestPost(int $postNum = 4)
    {
        return Post::with('user')->where('status', Post::PUBLISHED)->latest()->take($postNum)->get();
    }
}