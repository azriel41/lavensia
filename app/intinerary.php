<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intinerary extends Model
{
	protected $table = 'm_intinerary';
	protected $primaryKey = 'mi_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = ['mi_id','mi_name','category_id','mi_highlight','mi_by','created_by','updated_by'];

	public function category()
	{
        return $this->belongsTo('App\category','category_id');
	}
}
