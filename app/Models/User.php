<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

const DEFAULT_ROLE_ID = 2;

class User extends Authenticatable
{
    //
    protected $fillable = ['fio', 'login', 'email', 'password'];

    protected $attributes = [
        'role_id' => DEFAULT_ROLE_ID
    ];
}
