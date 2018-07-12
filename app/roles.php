<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{

    protected $table = 'role';
	public $incrementing = false;
    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_id', 'role_name', 'user_id',
    ];

    public function User()
    {
    	return $this->hasMany('App\User','role_id');
    }
}
