<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class intinerary_controller extends Controller
{
    public function index($value='')
    {
    	return view('master.master_intinerary.index_intinerary');
    }

    public function create()
    {
    	return view('master.master_intinerary.create_intinerary');
    }
}
