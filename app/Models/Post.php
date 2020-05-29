<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     * 
     * @todo remove user_id fillable, lý do: user_id không nên để người dùng điền, rất dễ bị hack
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'image', 'status', 'user_id'
    ];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function reports()
    {
        return $this->hasMany('App\Models\Report');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
