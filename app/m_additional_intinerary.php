<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_additional_intinerary extends Model
{
    protected $table = 'm_additional_intinerary';
	protected $primaryKey = 'mai_id';
	public $timestamps = false;
	protected $fillable = ['mai_id','intinerary_mi_id','additional_ma_id'];

}
