<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use App\Models\Post;

class VoteController extends Controller
{
    public function vote($postId, $voteValue, Post $post)
    {
        $postCurrent = $post->findOrFail($postId);

        Vote::where([['post_id', $postCurrent->_id], ['user_id', user()->id]])->forceDelete();

        Vote::create([
            'vote' => $voteValue,
            'user_id' => user()->_id,
            'post_id' => $postCurrent->_id,
        ]);

        return redirect()->back();
    }
}
