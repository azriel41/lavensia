<?php

namespace App\Http\Controllers\additional;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\roles;
use Session;
use Auth;
use App\category;
use App\intinerary;
use DB;

class partnerController extends Controller
{
    
    public function partner()
    {	
    	// $data = user::all();
    	$data = DB::table('users')->select('co_address','co_phone','image','co_name')->where('name','!=','developer')->groupBy('co_address','co_phone','image','co_name')->get();
        // return $data;
        $category = category::all();

		$intinerary = intinerary::all();

		$det = [];
		$cat = [];
		foreach ($intinerary as $index => $val) {
			$det = $val->detail_intinerarys;
			$cat = $val->category;
		}
		$book = User::all();

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
				// return $cart;

	    	return view('additional.partner',compact('data','category','intinerary','det','response','cart','jumlah'));
		}else{
	    	return view('additional.partner',compact('data','category','intinerary','det','response'));
		}
    }
    public function contact()
    {
    	$contact = DB::table('m_contact')->where('mc_id',1)->get();
    	// return json_encode($contact);
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
				// return $cart;

	    	return view('additional.contact',compact('cart','jumlah','contact'));
		}else{
	        return view('additional.contact',compact('contact'));
		}
    }
    public function load_footer()
    {
    	$data = DB::table('m_contact')->select('mc_rek')->get();

    	return response()->json(['kontak'=>$data[0]->mc_rek]);
    }
}
