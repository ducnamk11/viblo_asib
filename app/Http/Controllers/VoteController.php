<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\PostManager;
class VoteController extends Controller
{
    public function store($slug, Vote $vote)
    {
        $postCurrent = PostManager::findBySlug($slug) ;
        $vote->updateOrCreate([
            'value'=> 1,
            'user_id' => user()->_id,
            'post_id' => $postCurrent->_id,
        ]);
        return redirect()->back();
    }
}