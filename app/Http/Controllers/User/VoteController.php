<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\Request;
use App\Services\Post\PostManager;
use App\Models\Post;

class VoteController extends Controller
{
    public function up($id, Vote $vote, Post $post)
    {

        $postCurrent = $post->findOrFail($id);
        $vote->where([['post_id', $postCurrent->_id],['user_id', user()->_id]])->delete();
        $vote->updateOrCreate([
            'vote' => 1,
            'user_id' => user()->_id,
            'post_id' => $postCurrent->_id,
        ]);
        return redirect()->back();
    }

    public function down($id, Vote $vote, Post $post)
    {
        $postCurrent = $post->findOrFail($id);
        $vote->where([['post_id', $postCurrent->_id],['user_id', user()->_id]])->delete();
        $vote->updateOrCreate([
            'vote' => -1,
            'user_id' => user()->_id,
            'post_id' => $postCurrent->_id,
        ]);
        return redirect()->back();
    }
}