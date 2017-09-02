<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $fillable = [
        'lasrname',
        'firstname',
        'birthdate',
        'email',
        'password',
        'description',
        'adressname',
        'pc',
        'city',
        'department',
        'region',
        'created_at',
        'update_at',
        'remember_token'
    ];
}
