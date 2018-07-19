<?php

namespace App\Http\Controllers\additional;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\roles;
use Session;
use Auth;
class partnerController extends Controller
{
    
    public function partner()
    {
        
        return view('additional.partner');
        
    }
}
