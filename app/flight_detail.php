<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight_detail extends Model
{
	protected $table = 'm_flight_detail';
	protected $primaryKey = 'fd_intinerary_id';
	public $timestamps = false;

	protected $fillable = ['fd_intinerary_id','fd_detail','fd_nomor','fd_tanggal','fd_route','fd_time'];

	public function intinerary()
	{
        return $this->belongsTo('App\intinerary','mi_id');
	}
}
