<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

        protected $guard = 'employee';
        protected $table = 'user';

        protected $fillable = [
            'name', 'email', 'mobile', 'password','user_role','api_token',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
