<?php

namespace App\Models;

// use Jenssegers\Mongodb\Eloquent\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Maklad\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;
    const DEFAULT_IMAGE = 'avatars/default.png';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar','provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function postViews()
    {
        return $this->hasMany(PostView::class);
    }

    /**
     * @todo read this & delete
     * Trong trait nó đã hỗ trợ rồi lại còn ghi đè role
     * thì bảo sao ko lỗi
     */

    // public function roles()
    // {
        // return $this->hasMany(Role::class);
    // }
    // public function permissions()
    // {
    //     return $this->hasMany(Permission::class);
    // }
}
