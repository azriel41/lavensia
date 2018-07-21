<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_additional_booking extends Model
{
    protected $table = 'd_additonal_booking';
	protected $primaryKey = 'da_booking_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = ['da_booking_id',
						   'da_detail',
						   'da_name',
						   'da_additional_id',
						   'created_by',
						   'updated_by',
						];

	public function addition()
	{
        return $this->belongsTo('App\additional','ma_id');
	}

	public function booking()
	{
        return $this->belongsTo('App\d_booking','db_id');
	}
}
