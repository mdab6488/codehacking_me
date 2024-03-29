<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'is_active', 'photo_id',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function isAdmin()
    {
        if($this->role->name == 'administrator' && $this->is_active == 1){
            return true;
        }elseif($this->role->name == null){
            return false;
        }

        return false;
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
    public function getGravatarAttribute()
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://www.gravatar.com/avatar/$hash";
    }


}
