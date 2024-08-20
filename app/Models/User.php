<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'username',
        'password',
        'name',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    protected $primaryKey = 'id';
    public $incrementing = true; 
}
