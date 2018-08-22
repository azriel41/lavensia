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
class booking_printController extends Controller
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
    public function booking_print(Request $req)
    {


		return view('booking_print.booking_print');
    	
    }
    public function datatable_booking_print(Request $req)
    {
           
    	$data = d_booking::where('db_handle_by',null)->get();
        
        $data = collect($data);

        return Datatables::of($data)
			        ->addColumn('aksi', function ($data) {
			        return'<div class="btn-group">
			                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			                    <i class="material-icons">settings</i>
			                    Manage <span class="caret"></span>
			                </button>
			                <ul class="dropdown-menu" style="padding:0px">
			                	<li>
			                        <a onclick="handle(\''.$data->db_id.'\')" class="waves-effect waves-block bg-teal" style="color:#607D8B;">
			                            <i class="material-icons">touch_app</i>
			                            Handle
			                        </a>
			                    </li>
			                    <li>
			                        <a href="'.url('/master/master_intinerary/edit').'/'.$data->db_id.'" class=" waves-effect waves-block" style="color:#607D8B">
			                            <i class="material-icons">edit</i>
			                            Edit
			                        </a>
			                    </li>
			                    <li>
			                        <a onclick="deleting(\''.$data->db_id.'\')" class="waves-effect waves-block" style="color:#607D8B">
			                            <i class="material-icons">delete</i>
			                            Delete
			                        </a>
			                    </li>
			                </ul>
			                <div class="btn-group mr-2" role="group" aria-label="Second group">
							    <button type="button" class="btn btn-secondary">5</button>
							    <button type="button" class="btn btn-secondary">6</button>
							    <button type="button" class="btn btn-secondary">7</button>
							  </div>
							  <div class="btn-group" role="group" aria-label="Third group">
							    <button type="button" class="btn btn-secondary">8</button>
							  </div>
			            </div>';
			        })
			        ->rawColumns(['aksi'])
			        ->addIndexColumn()
			        ->make(true);
    }

    public function booking_handling(Request $req)
    {
    	$update = d_booking::where('db_id', $req->id)
				             ->update(['db_handle_by' => Auth::user()->id]);

    	return Response()->json(['status'=>1]);

    }
}
