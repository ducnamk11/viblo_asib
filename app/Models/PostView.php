<?php

namespace App\Models;
 
use Jenssegers\Mongodb\Eloquent\Model;


class PostView extends Model
{
    protected $guarded = [];

    protected $fillable = ['ip', 'user_agent', 'view_hash'];

    protected $casts = [
        'updated_at' => 'datetime'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}