<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Vote extends Model
{
    protected $guarded = [];
    const VOTEUP = 1;
    const VOTEDOWN = -1;
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}