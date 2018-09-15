<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_intinerary extends Model
{
    protected $table = 'm_detail_intinerary';
	protected $primaryKey = 'md_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = [
						   'md_id',
						   'md_intinerary_id',
						   'md_detail',
						   'md_nota',
						   'md_start',
						   'md_end',
						   'md_adult_price',
						   'md_child_price',
						   'md_infant_price',
						   'md_child_w_price',
						   'md_seat',
						   'md_dp',
						   'md_tata_tertib',
						   'md_final',
						   'md_seat_remain',
						   'md_tour_leader',
						   'md_tip',
						   'md_agent_com',
						   'created_by',
						   'updated_by'];

	public function intinerary()
	{
        return $this->belongsTo('App\intinerary','md_intinerary_id','mi_id');
	}

	public function book()
	{
        return $this->hasMany('App\d_booking','db_intinerary_id','md_id');
	}


}
