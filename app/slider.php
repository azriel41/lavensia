<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table = 'm_slider';
	protected $primaryKey = 'ms_id';

	protected $fillable = ['ms_id',
						   'ms_img'
						   ,'updated_at'
						   ,'created_at'];

}
