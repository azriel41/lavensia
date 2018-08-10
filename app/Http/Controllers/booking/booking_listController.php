<?php

namespace App\Http\Controllers\booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TestRepo;
use App\intinerary;
use App\category;
use App\schedule;
use App\detail_intinerary;
use App\User;
use App\additional;
use App\m_additional_intinerary;
use DB;
use carbon\Carbon;
use Auth;
use Response;
use File;
use Storage;
use Yajra\Datatables\Datatables;
use App\d_additional_booking;
use App\d_booking;
use App\d_party_name;
use Exception;
class booking_listController extends Controller
{
	protected $intinerary;
	protected $detail_intinerary;
	protected $d_booking;
	protected $d_party_name;
	protected $d_additional_booking;
	protected $additional;

	public function __construct(detail_intinerary $detail_intinerary,
								intinerary $intinerary,
								d_booking $d_booking,
								d_party_name $d_party_name,
								d_additional_booking $d_additional_booking,
								additional $additional)
	{
		$this->detail_intinerary 	= new TestRepo($detail_intinerary);
        $this->intinerary 		 	= new TestRepo($intinerary);
        $this->d_booking 		 	= new TestRepo($d_booking);
        $this->d_party_name 	 	= new TestRepo($d_party_name);
        $this->d_additional_booking = new TestRepo($d_additional_booking);
        $this->additional 			= new TestRepo($additional);
        
	}
    public function booking_list(Request $req)
    {
    	$user = Auth::user()->id;
  		$data = DB::Table('d_booking as db')
    					->leftjoin('m_intinerary as mi','db.db_intinerary_id','=','mi.mi_id')
						->leftjoin('users','users.id','=','db.db_handle_by')	
    					->get();

		return view('booking_list.booking_list',compact('data'));
    	
    }
    public function bookingdetail($id)
    {

		$data = DB::table('d_booking')
						->leftjoin('d_additonal_booking','d_additonal_booking.da_booking_id','=','d_booking.db_id')
						->leftjoin('m_detail_intinerary','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')	
						->leftjoin('m_intinerary','m_intinerary.mi_id','=','m_detail_intinerary.md_intinerary_id')	
						->leftjoin('users','users.id','=','d_booking.db_handle_by')	
						->where('db_kode_transaksi',$id)
						->first();    	
		// return json_encode($data);
		return view('booking_list.booking_listdetail',compact('data'));
    }
    
}
