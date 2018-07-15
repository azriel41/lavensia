<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\additional;
class additionalController extends Controller
{
    public function index($value='')
    {
    	return view('master.additional.index_additional');
    }
}
