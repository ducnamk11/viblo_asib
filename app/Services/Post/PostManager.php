<?php

namespace App\Services\Post;

use App\Models\Post;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Http\Controllers\Controller;

class PostManager extends Controller
{
    /**
     * Post Model
     *
     * @var \App\Models\Post
     */
    protected $post;

    public function __construct(Post $post) {
        $this->post = $post;
    }

    public function create(array $attr, Authenticatable $user)
    {
        $post = $this->post->fill($attr);

        if ($latestPost = $this->latestPost()) {
            $post->find_key = $latestPost->find_key + 1;
        }else{
            $post->find_key =0;
        }
        return tap($post, function ($post) use ($user) {
            $user->posts()->save($post);
        });
    }

    /**
     * a-b-c-id
     *
     * @param string $slug
     * @return int
     */
    public static function getFindKeyFromSlug(string $slug)
    {
        $slug = explode('-', $slug);

        return base62_int_decode(array_pop($slug));
    }

    public static function findBySlug(string $slug)
    {
        return Post::where('find_key', self::getFindKeyFromSlug($slug))->first();
    }

    /**
     * get latest Post
     *
     * @return \App\Models\Post|null
     */
    protected function latestPost()
    {
        return $this->post->latest()->first();
    }
}