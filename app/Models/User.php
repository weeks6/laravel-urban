<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

const DEFAULT_ROLE_ID = 1;

class User extends Authenticatable
{
    //
    protected $fillable = ['email', 'password'];

    protected $attributes = [
        'role_id' => DEFAULT_ROLE_ID
    ];
}
