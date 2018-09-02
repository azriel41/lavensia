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
			        return'<div class="icon-button-demo">                              
                                <a href="'.url('/booking/booking_print/print_excel').'/'.$data->db_intinerary_id.'" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                	<i class="material-icons">print</i>
                                </a>
						              
                                <a href="'.url('/booking/booking_print/print_pdf').'/'.$data->db_intinerary_id.'" class="btn bg-purple btn-circle waves-effect waves-circle waves-float">
                                	<i class="material-icons">picture_as_pdf</i>
                                </a>

                                <a href="'.url('/booking/booking_print/print_passport').'/'.$data->db_intinerary_id.'" class="btn bg-cyan btn-circle waves-effect waves-circle waves-float">
                                	<i class="material-icons">layers</i>
                                </a>
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
    public function print_excel($id)
    {	
    	$data = DB::table('m_intinerary')
						->join('m_detail_intinerary','m_intinerary.mi_id','=','m_detail_intinerary.md_intinerary_id')
						->join('d_booking','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')
						->join('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')
						->where('db_intinerary_id','=',$id)
						->get();
    	return $data;
		return view('booking_print.booking_print');
    }
    public function print_pdf($id)
    {
    	$data = DB::table('m_intinerary')
						->join('m_detail_intinerary','m_intinerary.mi_id','=','m_detail_intinerary.md_intinerary_id')
						->join('d_booking','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')
						->join('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')
						->where('db_intinerary_id','=',$id)
						->get();
    	// return $data;
		return view('booking_print.booking_print_pdf',compact('data'));
    }
    public function print_passport($id)
    {
    	$data = DB::table('m_intinerary')
						->join('m_detail_intinerary','m_intinerary.mi_id','=','m_detail_intinerary.md_intinerary_id')
						->join('d_booking','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')
						->join('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')
						->where('db_intinerary_id','=',$id)
						->get();
    	// return $data;
		return view('booking_print.booking_print_passport',compact('data'));
    }
}
