<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Notifiable, Authenticatable;

    const TEACHER_USER = 'true';
    const STUDENT_USER = 'false';

    protected $collection = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
