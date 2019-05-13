<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intinerary extends Model
{
	protected $table = 'm_intinerary';
	protected $primaryKey = 'mi_id';
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	protected $fillable = [ 'mi_id',
							'mi_nota',
							'mi_name',
							'category_id',
							'mi_highlight',
							'mi_term',
							'mi_pdf',
							'mi_image',
							'mi_by',
							'created_by',
							'updated_by',
							'mi_status',
							'mi_agent_com_adult',
							'mi_agent_com_cwb',
							'mi_agent_com_cnb',
							'mi_agent_com_infant',
							'mi_netto_adult',
							'mi_netto_cwb',
							'mi_netto_cnb',
							'mi_book_by',
							'mi_netto_infant'
						];

	public function category()
	{
        return $this->belongsTo('App\category','category_id');
	}


	public function detail_intinerarys()
	{
        return $this->hasMany('App\detail_intinerary','md_intinerary_id');
	}


	public function destination()
	{
        return $this->hasMany('App\destination','d_id');
	}

	public function schedules()
	{
        return $this->hasMany('App\schedule','ms_intinerary_id');
	}

	public function add()
	{
        return $this->belongsToMany('App\additional','m_additional_intinerary','intinerary_mi_id','additional_ma_id');
	}
	public function flight()
	{
        return $this->hasMany('App\flight_detail','fd_intinerary_id');
	}
}
