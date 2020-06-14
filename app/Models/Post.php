<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Jenssegers\Mongodb\Eloquent\Model;

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

    // protected $fillable = [ 'title', 'content', 'image' ];
 
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
    public function postviews()
    {
        return $this->hasMany(PostView::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Create slug from title & find_key
     *
     * @return string
     */
    public function generatorSlug()
    {
        return Str::slug($this->title) . '-' . base62_int_encode($this->find_key);
    }

    public function stripTagsContent()
    {
        return preg_replace('/<[^>]*>/', '', $this->content);
    }  
}