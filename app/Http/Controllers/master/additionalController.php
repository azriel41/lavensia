<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class additionalController extends Controller
{
    public function index($value='')
    {
    	return view('master.index_additional');
    }
}
