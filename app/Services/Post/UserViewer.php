<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Models\PostView;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Authenticatable;

class UserViewer extends Viewer
{
    /**
     * User Model
     *
     * @var \App\Models\User
     */
    protected $user;

    public function __construct(Authenticatable $user) {
        $this->user = $user;
    }

    public function logViewer(Post $post)
    {
        $lastView = $this->getLastRecord($post);

        if ($this->shouldCreateView($lastView)) {
            $this->createRecord($post);
        } else {
            $this->updateRecord($lastView);
        }
    }

    protected function createRecord(Post $post)
    {
        $viewer = PostView::create([
            'ip'         => getIpClient(),
            'user_agent' => request()->userAgent(),
            'view_hash'  => $this->hashView()
        ]);

        return $post->postViews()->save(
            $this->user->postViews()->save($viewer)
        );
    }

    /**
     * Undocumented function
     *
     * @param \App\Models\Post $post
     * @return \App\Models\PostView|null
     */
    protected function getLastRecord(Post $post)
    {
        return $this->user->postViews()->where('post_id', $post->id)->first();
    }
}
