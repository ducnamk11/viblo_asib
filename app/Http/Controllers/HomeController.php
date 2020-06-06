<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public
    function __construct()
    {
        view()->share('new_post', $this->getLatestPost(4));
    }

    public function index()
    {
        return view('home.index', [
            'posts' => Post::with('user')->latest()->paginate(10),
        ]);
    }

    public function postDetail($_id)
    {
        $post = Post::FindOrFail($_id);
        $comments = $post->comments;
        return view('home.post', [
            'post' => $post,
            'comments' => $comments
        ]);
    }

    public function authorDetail($_id)
    {
        return view('home.author', [
            'user' => User::FindOrFail($_id),
            'posts' => User::FindOrFail($_id)->posts,
        ]);
    }

    public function postComment(Request $request, $slug, $_id)
    {
        user()->comments()->create([
            'user_id' => Auth::user()->_id,
            'post_id' => $_id,
            'content' => $request->content
        ]);
        return back();
    }

    public function search(Request $request)
    {
        $search = str_replace(' ', '%', $request->search);
        $results = Post::where('content', 'LIKE', '%' . $search . '%')->get();
        return view('home.search', [
            'keyword' => $request->search,
            'results' => $results
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
