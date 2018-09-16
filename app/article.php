<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
   protected $table = 'd_article';
   protected $primaryKey = 'da_id';
   const CREATED_AT = 'da_created_at';
   const UPDATED_AT = 'da_updated_at';

   protected $fillable = ['da_id','da_header','da_image','da_desc','da_show','da_created_at','da_created_at','da_updated_at'];
}
