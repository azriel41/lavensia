<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class additional extends Model
{
   protected $additional = 'm_additional';
   protected $primaryKey = 'ma_id';

   protected $fillable = ['ma_id','ma_name','ma_desc','ma_price','ma_created_at','ma_udpated_at'];
}
