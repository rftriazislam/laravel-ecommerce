<?php

namespace App;


    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Poweradmin extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'poweradmin';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }