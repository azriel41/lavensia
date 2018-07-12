<?php

namespace App\Http\Controllers\package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use auth;

class packageController extends Controller
{
    public function package()
    {
        return view('package.package');
    }
    
    
}
