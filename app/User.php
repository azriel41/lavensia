<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use Auth;
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
        
         $cek = DB::table('users')
                ->leftjoin('m_hak_akses', 'mh_level', '=', 'role_id')
                ->where('mh_menu', '=', $fitur)
                ->where($aksi, '=', 'true') 
                ->where('id', '=', Auth::user()->id)             
                ->get();
          // return $cek;
        
        if(count($cek) != 0)
            return true;
        else
            return false;
    }
}

   