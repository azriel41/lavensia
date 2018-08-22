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

    public function akses($fitur,$aksi){
      // select * from  join  on = where ubah =true

        //  $cek = DB::table('d_mem')
        //         ->join('d_hak_akses', 'm_jabatan', '=', 'ha_level')
        //         ->where('ha_menu', '=', $fitur)
        //         ->where($aksi, '=', 1) 
        //         ->where('m_id', '=', Auth::user()->m_id)             
        //         ->get();        
        
        // if(count($cek) != 0)
        //     return true;
        // else
        //     return false;
    }
}

   