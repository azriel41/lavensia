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

class bookingController extends Controller
{
	protected $intinerary;
	protected $detail_intinerary;
	public function __construct(detail_intinerary $detail_intinerary,intinerary $intinerary)
	{
		$this->detail_intinerary = new TestRepo($detail_intinerary);
        $this->intinerary 		 = new TestRepo($intinerary);
        
	}
    public function booking(Request $req)
    {
	
    	$intinerary  		= $this->intinerary->cari('mi_id',$req->id);
    	$detail_intinerary  = $this->detail_intinerary->show_detail_one('md_intinerary_id',$req->id,'md_detail',$req->dt);
        return view('booking.booking',compact('intinerary','detail_intinerary'));
    }
    
}
