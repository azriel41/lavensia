<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_booking extends Model
{
    protected $table = 'd_booking';
	protected $primaryKey = 'db_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = ['db_id',
						   'db_users',
						   'db_name',
						   'db_intinerary_id',
						   'db_telp',
						   'db_status',
						   'db_remark',
						   'db_total_additional',
						   'db_total_room',
						   'db_total',
						   'db_total_remain',
						   'db_total_adult',
						   'db_total_child',
						   'db_total_infant',
						   'created_by',
						   'updated_by',
						];

	public function user()
	{
        return $this->belongsTo('App\User','id');
	}

	public function detail_itin()
	{
        return $this->belongsTo('App\detail_intinerary','db_intinerary_id','md_id');
	}

	public function additional_book()
	{
        return $this->hasMany('App\d_additional_booking','da_booking_id');
	}

	public function party_name()
	{
        return $this->hasMany('App\d_party_name','dp_booking_id');
	}
}
