<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentPost;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Services\Post\GuestViewer;
use App\Services\Post\UserViewer;
use Illuminate\Support\Facades\Auth;
use App\Services\Post\PostManager;
use App\Services\Post\Viewer;

class HomeController extends Controller
{
    /**
     * @todo Chưa tối ưu câu truy vấn (Trong trường hợp này là lấy tận 2 lần post)
     */
    public function __construct()
    {
        view()->share([
            'new_post' => $this->getLatestPost(4),
            'most_viewed' => Viewer::orderPostByViewer(Post::with('postViews')->where('status',Post::PUBLISHED)->get())
        ]);
    }

    public function index()
    {
        return view('home.index', [
            'posts' => Post::with('user')->where('status',Post::PUBLISHED)->latest()->paginate(10),
        ]);
    }

    public function postDetail($slug, PostManager $post, UserViewer $userViewer, GuestViewer $guestViewer)
    {
        if (!($post = $post->findBySlug($slug))) {
            return abort(404);
        };
        if (user()) {
            $userViewer->logViewer($post);
        } else {
            $guestViewer->logViewer($post);
        }
        return view('home.post', [
            'slug' => $slug,
            'post' => $post,
            'comments' => $post->comments()->whereNull('parent_id')->latest()->get(),
            'countView' => count($post->postViews()->get()),
        ]);
    }

    public function authorDetail($_id)
    {
        return view('home.author', [
            'user' => User::FindOrFail($_id),
            'posts' => User::FindOrFail($_id)->posts,
        ]);
    }

    public function postComment(StoreCommentPost $request, $slug)
    {
        $find_key = PostManager::getFindKeyFromSlug($slug);
        $postCurrent = Post::where('find_key', $find_key)->first();
        user()->comments()->create([
            'user_id' => Auth::user()->_id,
            'post_id' => $postCurrent->_id,
            'parent_id' => $request->parent_id,
            'content' => $request->content,
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
