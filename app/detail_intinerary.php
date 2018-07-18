<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_intinerary extends Model
{
    protected $table = 'm_detail_intinerary';
	protected $primaryKey = 'md_intinerary_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = ['md_intinerary_id',
						   'md_detail',
						   'md_nota',
						   'md_start',
						   'md_end',
						   'md_adult_price',
						   'md_child_price',
						   'md_infant_price',
						   'md_child_w_price',
						   'md_seat',
						   'md_seat_remain',
						   'md_term',
						   'created_by',
						   'updated_by'];

	public function intinerary()
	{
        return $this->belongsTo('App\intinerary','mi_id');
	}
}
