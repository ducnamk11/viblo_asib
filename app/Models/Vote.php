<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @todo Chỉnh lại cho chuẩn psr
 */
class Vote extends Model
{
    use SoftDeletes;
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
    public function generatorSlug($title, $find_key)
    {
        return Str::slug($title) . '-' . base62_int_encode($find_key);
    }
}