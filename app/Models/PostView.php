<?php

namespace App\Models;
 
use Jenssegers\Mongodb\Eloquent\Model;


class PostView extends Model
{
    protected $guarded = [];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}