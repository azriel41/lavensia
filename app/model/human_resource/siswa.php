<?php

namespace App\model\human_resource;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
   protected $table = 'users';
   protected $primaryKey = 'id';

   protected $fillable = ['id','name','username','birthday','phone','email','address','studies','education','class','created_at','udpated_at'];
	
   protected $hidden = [
        'password', 'remember_token',
   ];
}
