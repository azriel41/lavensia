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
       
        $additional = DB::table('m_additional_intinerary')
                                            ->leftjoin('m_additional','m_additional_intinerary.additional_ma_id','=','m_additional.ma_id')
                                            ->where('intinerary_mi_id','=',$id)->get();

        $flight = DB::table('m_flight_detail')->where('fd_intinerary_id',$id)->get();

        if (Auth::User() != null) {
            $cart   = DB::table('d_booking')
                        ->leftjoin('m_detail_intinerary','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')
                        ->leftjoin('m_intinerary','m_intinerary.mi_id','=','m_detail_intinerary.md_intinerary_id')
                        ->where('db_users',Auth::User()->role_id)
                        ->where('db_status','Waiting List')
                        ->get();


            $jumlah = count(DB::table('d_booking')
                        ->where('db_users',Auth::User()->role_id)
                        ->where('db_status','Waiting List')
                        ->get());
            return view('package.package',compact('data','schedule','detail','additional','cart','jumlah','flight'));
        }else{
            return view('package.package',compact('data','schedule','detail','additional','flight'));
        }
    }
    public function package_pdf(Request $req)
    {
        $data = intinerary::where('mi_nota',$req->id)->get();
        $gg = $data[0]->mi_pdf;
        if ($gg == null) {
            return view('pdf_kosong');
        }
        $file = realpath('.').'/storage/app/'.$gg;

        // return $file;
        $headers = [
              'Content-Type' => 'application/pdf',
         ];

        return response()->download($file);

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
