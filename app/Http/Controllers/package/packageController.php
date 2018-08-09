<?php

namespace App\Http\Controllers\package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use auth;
use PDF;
use Storage;
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
    public function package_pdf(Request $req)
    {
        $id = str_replace('/', '-', $req->id);
        

        return response()->download('storage/app/itinerary/'.'PDF_'.$id.'.pdf');

    }
    public function package_modal_detail(Request $request)
    {
        // dd($request->all());
        // return $data = detail_intinerary::all();
        $data = intinerary::where('mi_id','=',$request->id)->get();
        foreach ($data as $in => $det) {
            $detail = $det->detail_intinerarys; 
        }
        return view('additional.modal_intinerary',compact('data','detail'));
    }
}
