<?php

namespace App\Http\Controllers\payment_page;

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
class payment_page_controller extends Controller
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
        $this->detail_intinerary    = new TestRepo($detail_intinerary);
        $this->intinerary           = new TestRepo($intinerary);
        $this->d_booking            = new TestRepo($d_booking);
        $this->d_party_name         = new TestRepo($d_party_name);
        $this->d_additional_booking = new TestRepo($d_additional_booking);
        $this->additional           = new TestRepo($additional);
        
    }


    public function payment(Request $req)
    {	

        $booking = $this->d_booking->cari('db_id',$req->id);

    	if (Auth::User() != null) {
            $cart = Auth::User()->booking;
            $jumlah = count(Auth::User()->booking);
    		return view('operational.payment_user.payment_user',compact('cart','jumlah','booking'));
        }else{
    		return view('operational.payment_user.payment_user','booking');
        }
    }
}
