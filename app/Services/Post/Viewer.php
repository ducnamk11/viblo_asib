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

    /**
     * Count total view of post
     *
     * @param Post $post
     * @return int
     */
    public static function count(Post $post)
    {
        return $post->postViews()->count();
    }

    /**
     * Log current viewer
     *
     * @param Post $post
     * @return void
     */
    abstract public function logViewer(Post $post);

    /**
     * Get last viewer from current post
     *
     * @param Post $post
     * @return \App\Models\PostView
     */
    abstract protected function getLastRecord(Post $post);

    /**
     * Create new viewer record
     *
     * @param \App\Models\Post $post
     * @return \App\Models\PostView
     */
    abstract protected function createRecord(Post $post);

    /**
     * If lastest record updated_at smaller than EXPIRES_VIEW_TIME from now
     * then should create new one
     *
     * @param PostView $viewer
     * @return boolean
     */
    protected function shouldCreateView(PostView $viewer = null)
    {
        if ($viewer === null) {
            return true;
        }

        $viewTime = Carbon::instance($viewer->updated_at);

        return now()->greaterThan($viewTime->addMinutes(self::EXPIRES_VIEW_TIME));
    }

    /**
     * Update fields updated_at from model
     *
     * @param \App\Models\PostView $latestRecord
     * @return boolean
     */
    protected function updateRecord(PostView $latestRecord)
    {
        return $latestRecord->touch();
    }

    /**
     * Get hash ip address and user_agent
     *
     * @return string
     */
    protected function hashView()
    {
        return sha1(getIpClient() . '|' . request()->userAgent());
    }
}
