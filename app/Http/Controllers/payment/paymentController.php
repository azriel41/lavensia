<?php

namespace App\Http\Controllers\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use auth;

class paymentController extends Controller
{
    public function index ()
    {
        return view('operational.payment.index_payment');
    }
    
}
