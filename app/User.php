<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'lastname',
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // PS CREER UNE TABLE POUR COMMENTAIRES
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
