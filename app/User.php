<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

     #The attributes that are mass assignable.
    protected $fillable = [
        'first_name', 'last_name', 'email', 'gender', 'password',
    ];

     #The attributes that should be hidden for arrays.
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function entries(){
      return $this->hasMany('App\Entry');
    }
}
