<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
   protected $table = 'm_company';
   protected $primaryKey = 'co_id';
   const CREATED_AT = 'co_created_at';
   const UPDATED_AT = 'co_updated_at';

   protected $fillable = ['co_id','co_name','co_image','co_phone','co_email','co_address','co_city','mg_name','mg_phone','mg_email','co_created_at','co_updated_at'];

	
}
