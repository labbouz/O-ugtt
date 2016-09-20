<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Kodeine\Acl\Traits\HasRole;

//class User extends Authenticatable
class User extends Authenticatable
{
    use HasRole;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public  function profile(){
        return $this->hasOne('App\Profile');
    }
}
