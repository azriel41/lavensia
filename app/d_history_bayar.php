<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_history_bayar extends Model
{
    protected $table = 'd_history_bayar';
	protected $primaryKey = 'dh_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = ['dh_id',
						   'dh_booking_id',
						   'dh_total_payment',
						   'dh_payment_method',
						   'dh_status_payment',
						];

	public function booking()
	{
        return $this->belongsTo('App\d_booking','dh_booking_id','db_id');
	}

	public function detail_history()
	{
        return $this->hasMany('App\d_history_bayar_d','dhd_history_id');
	}
}
