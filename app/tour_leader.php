<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour_leader extends Model
{
    protected $table = 'd_party_name';
	protected $primaryKey = 'tl_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = ['dp_booking_id',
						   'dp_detail',
						   'dp_bed',
						   'dp_name',
						   'dp_passport',
						   'dp_exp_date',
						   'dp_issuing',
						   'dp_gender',
						   'dp_birth_date',
						   'dp_birth_place',
						   'dp_reference',
						   'dp_image',
						   'dp_room',
						   'dp_status_person',
						   'created_by',
						   'updated_by',
						];
}
