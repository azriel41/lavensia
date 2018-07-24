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
						   'dh_account_name',
						   'dh_account_number',
						   'dh_nominal',
						   'dh_payment_method',
						   'dh_image'
						];

	public function booking()
	{
        return $this->belongsTo('App\d_booking','db_id');
	}
}
