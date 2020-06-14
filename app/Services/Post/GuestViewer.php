<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Models\PostView;

class GuestViewer extends Viewer
{
    public function logViewer(Post $post)
    {
        $latestViewer = $this->getLastRecord($post);

        if ($this->shouldCreateView($latestViewer)) {
            $this->createRecord($post);
        } else {
            $this->updateRecord($latestViewer);
        }
    }

    protected function getLastRecord(Post $post)
    {
        return $post->postViews()->where('view_hash', $this->hashView())->first();
    }

    protected function createRecord(Post $post)
    {
        return $post->postViews()->save(PostView::create([
            'ip'         => getIpClient(),
            'user_agent' => request()->userAgent(),
            'view_hash'  => $this->hashView()
        ]));
    }
}
