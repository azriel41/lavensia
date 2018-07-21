<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_party_name extends Model
{
    protected $table = 'd_party_name';
	protected $primaryKey = 'dp_booking_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = ['dp_booking_id',
						   'dp_detail',
						   'dp_fam_name',
						   'dp_name',
						   'dp_price',
						   'dp_bed',
						   'dp_image',
						   'created_by',
						   'updated_by',
						];
}
