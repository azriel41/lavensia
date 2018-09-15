<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    protected $table = 'm_destination';
	protected $primaryKey = 'd_id';
	public $timestamps = false;
	

	protected $fillable = [
						   'd_id',
						   'd_detail',
						   'd_category_id',
						  ];

	public function intinerary()
	{
        return $this->belongsTo('App\intinerary','d_id','mi_id');
	}

	public function category()
	{
        return $this->belongsTo('App\category','d_category_id','mc_id');
	}


}
