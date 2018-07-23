<?php

namespace App\Http\Controllers\package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use auth;
use App\detail_intinerary;
use App\intinerary;
use App\schedule;
use App\m_additional_intinerary;

class packageController extends Controller
{
    public function package(Request $request,$id)
    {
    	$id = $request->id;
    	$data = intinerary::where('mi_id','=',$id)->get();
    	foreach ($data as $index => $det) {
    		$detail = $det->detail_intinerarys;
    	}
    	// return $detail;
        $schedule = schedule::where('ms_intinerary_id','=',$id)->get();
    	$additional = m_additional_intinerary::where('intinerary_mi_id','=',$id)->get();
        
        if (Auth::User() != null) {
            $cart = Auth::User()->booking;
            $jumlah = count(Auth::User()->booking);
            return view('package.package',compact('data','schedule','detail','additional','cart','jumlah'));
        }else{
            return view('package.package',compact('data','schedule','detail','additional'));
        }
    }
    
}
