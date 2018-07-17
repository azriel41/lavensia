<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_intinerary extends Model
{
    protected $table = 'm_detail_intinerary';
	protected $primaryKey = 'md_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = ['md_id',
						   'md_intinerary',
						   'md_start',
						   'md_end',
						   'md_adult_price',
						   'md_child_price',
						   'md_infant_price',
						   'md_term',
						   'created_by',
						   'updated_by'];

	public function intinerary()
	{
        return $this->belongsTo('App\intinerary','md_intinerary');
	}
}
