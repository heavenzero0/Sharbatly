<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //
    protected $table = 'users';

    protected $guarded = ['id'];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
