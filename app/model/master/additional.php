<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class additional extends Model
{
   protected $additional = 'users';
   protected $primaryKey = 'id';

   protected $fillable = ['id','name','username','birthday','phone','email','address','studies','education','class','created_at','udpated_at'];
	
   protected $hidden = [
        'password', 'remember_token',
   ];
}
