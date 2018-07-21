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
class bookingController extends Controller
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
    public function booking(Request $req)
    {
	
    	$intinerary  		= $this->intinerary->cari('mi_id',$req->id);
    	$detail_intinerary  = $this->detail_intinerary->show_detail_one('md_intinerary_id',$req->id,'md_detail',$req->dt);
        return view('booking.booking',compact('intinerary','detail_intinerary'));
    }
    public function save(Request $req)
    {
        return DB::transaction(function() use ($req) {  

    		// Save Head

    		$id = $this->d_booking->max('db_id');
    		dd($req->a_name);
    		$data = array(
    						'db_id'				    => $id,
						    'db_users'				=> Auth::user()->id,
						    'db_name'				=> $req->bk_partyname,
						    'db_pax'				=> $req->bk_totalpac,
						    'db_remark'				=> $req->bk_remark,
						    'db_total_additional'	=> filter_var($req->total_additional_input,FILTER_SANITIZE_NUMBER_INT)/100,
						    'db_total_room'			=> filter_var($req->total_room_input,FILTER_SANITIZE_NUMBER_INT)/100,
						    'created_by'			=> Auth::user()->id,
						    'updated_by'			=> Auth::user()->id,
    					 );

    		$this->d_booking->create($data);

    		dd($this->d_booking->all()->toArray());

    	});
    }
    
}
