<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    
    public function articles()
    {
        return $this->hasMany('App\Article')->latest();
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function isWriter()
    {
        if($this->level>0)
            return true;
        return false;
    }
    public function isAdmin()
    {
        if($this->level>1)
            return true;
        return false;
    }
    public function image()
    {
        if(!empty($this->image))
            return $this->image;
        return 'http://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)));
    }
}
