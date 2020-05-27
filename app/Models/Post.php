<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;


class Post extends Model
{
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'image', 'status'
    ];

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    public function reports() {
        return $this->hasMany('App\Models\Report');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
