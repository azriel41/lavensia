<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table = 'm_schedule';
	protected $primaryKey = 'ms_intinerary_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = ['ms_intinerary_id',
						   'ms_detail',
						   'ms_caption',
						   'ms_description',
						   'created_by',
						   'updated_by'];

	public function intinerary()
	{
        return $this->belongsTo('App\intinerary','mi_id');
	}
}
