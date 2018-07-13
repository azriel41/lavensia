<?php

namespace App\Http\Controllers\booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use auth;

class bookingController extends Controller
{
    public function booking()
    {
        return view('booking.booking');
    }
    
}
