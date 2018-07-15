<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class intinerary_controller extends Controller
{
    public function index($value='')
    {
    	return view('master.index_intinerary');
    }
}
