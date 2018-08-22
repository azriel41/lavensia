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
    protected $fillable = [
        'username', 'email', 'password','name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function jabatans()
    {
        return $this->belongsTo('App\jabatan','role_id');
    }

    public function booking()
    {
        return $this->hasMany('App\d_booking','db_users');
    }

    public function handle()
    {
        return $this->hasMany('App\d_booking','db_handle_by');
    }
}

   