<?php

namespace App\Http\Controllers\package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use auth;
use App\detail_intinerary;
use App\schedule;

class packageController extends Controller
{
    public function package(Request $request,$id)
    {
    	$id = $request->id;
    	$data = detail_intinerary::where('md_intinerary_id','=',$id)->with('intinerary')->get();
    	$schedule = schedule::where('ms_intinerary_id','=',$id)->get();
        return view('package.package',compact('data','schedule'));
    }
    
}
