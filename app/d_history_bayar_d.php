<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class d_history_bayar_d extends Model
{
    protected $table = 'd_history_bayar_d';
	protected $primaryKey = 'dhd_id';


	protected $fillable = ['dhd_id',
						   'dhd_history_id',
						   'dhd_bank',
						   'dhd_nama_rekening',
						   'dhd_nominal',
						   'dhd_image',
						   'dhd_tanggal',
						];

	public function history()
	{
        return $this->belongsTo('App\d_history_bayar','dh_id');
	}
}
