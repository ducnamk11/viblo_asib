<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{ 
    public function __construct() {
        view()->share('new_post', $this->getLatestPost(4));
    }

    public function index()
    {
        return view('home.index', [
            'posts' => Post::with('user')->latest()->paginate(10),
        ]);
    }

    public function postDetail( $slug ,$_id)
    {
        return view('home.post', [
            'post' => Post::where('_id', $_id)->firstOrFail()
         ]);
    }
    public function authorDetail($_id)
    {
        dd(1);

         return view('home.author', [
            'user' => User::FindOrFail($_id),
            'posts' => User::FindOrFail($_id)->posts,
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