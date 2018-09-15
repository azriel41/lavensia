<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour_leader extends Model
{
    protected $table = 'd_tour_leader';
	protected $primaryKey = 'tl_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = ['tl_id',
						   'tl_name',
						   'tl_alamat',
						   'tl_passport',
						   'tl_exp_date',
						   'tl_phone',
						   'tl_issuing',
						   'tl_gender',
						   'tl_birth_date',
						   'tl_birth_place',
						   'tl_image',
						   'created_by',
						   'updated_by',
						];
}
