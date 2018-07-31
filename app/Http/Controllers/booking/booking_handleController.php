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
class booking_handleController extends Controller
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
    public function booking_handle(Request $req)
    {

		return view('booking_handle.booking_handle');
    	
    }
    public function datatable_booking_handle(Request $req)
    {
    	$data = $this->d_booking->all();
           
        
        $data = collect($data);

        return Datatables::of($data)
			        ->addColumn('aksi', function ($data) {
			            return'<div class="btn-group">
			                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			                    <i class="material-icons">settings</i>
			                    Manage <span class="caret"></span>
			                </button>
			                <ul class="dropdown-menu" style="padding:0px">
			                    <li class="bg-orange">
			                        <a href="'.url('/master/master_intinerary/edit').'/'.$data->db_id.'" class=" waves-effect waves-block" style="color:white">
			                            <i class="material-icons">edit</i>
			                            Edit
			                        </a>
			                    </li>
			                    <li class="bg-red">
			                        <a onclick="deleting(\''.$data->db_id.'\')" class="waves-effect waves-block" style="color:white">
			                            <i class="material-icons">delete</i>
			                            Delete
			                        </a>
			                    </li>
			                    <li class="bg-red">
			                        <a onclick="deleting(\''.$data->db_id.'\')" class="waves-effect waves-block" style="color:white">
			                            <i class="material-icons">delete</i>
			                            Delete
			                        </a>
			                    </li>
			                </ul>
			            </div>';
			        })
			        ->rawColumns(['aksi'])
			        ->addIndexColumn()
			        ->make(true);
    }
    
}


