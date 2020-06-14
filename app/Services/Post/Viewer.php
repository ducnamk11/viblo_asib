<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Models\PostView;
use Illuminate\Support\Carbon;

abstract class Viewer
{
    /**
     * Time expires in minutes
     */
    const EXPIRES_VIEW_TIME = 5;

    public static function count(Post $post)
    {
        return $post->postViews()->count();
    }

    abstract public function logViewer(Post $post);

    abstract protected function getLastRecord(Post $post);

    abstract protected function createRecord(Post $post);

    protected function shouldCreateView(PostView $viewer = null)
    {
        if ($viewer === null) {
            return true;
        }

        $viewTime = Carbon::instance($viewer->updated_at);

        return now()->greaterThan($viewTime->addMinutes(self::EXPIRES_VIEW_TIME));
    }

    protected function updateRecord(PostView $latestRecord)
    {
        return $latestRecord->touch();
    }

    protected function hashView()
    {
        return sha1(getIpClient() . '|' . request()->userAgent());
    }
}
