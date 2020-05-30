<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    protected $guarded = [];

    /**
     * status post has published
     */
    const PUBLISHED = 1;

    /**
     * status post not publish yet
     */
    const NOT_PUBLISHED = 0;  

    protected $fillable = [ 'title', 'content', 'image' ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
