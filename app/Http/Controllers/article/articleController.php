<?php

namespace App\Http\Controllers\article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\roles;
use Session;
use Auth;
use App\category;
use App\intinerary;
use DB;

class articleController extends Controller
{
    
    public function article()
    {
    	$data = User::all();
        
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
							->whereRaw('db_total = db_total_remain')
							->get();


				$jumlah = count(DB::table('d_booking')
							->where('db_users',Auth::User()->role_id)
							->whereRaw('db_total = db_total_remain')
							->get());
				// return $cart;

	    	return view('article.article',compact('data','category','intinerary','det','response','cart','jumlah'));
		}else{
	    	return view('article.article',compact('data','category','intinerary','det','response'));
		}
    }
}
