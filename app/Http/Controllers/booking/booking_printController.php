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
use App\all_variable;
use Excel;
use PDF;
use PHPExcel_Worksheet_PageSetup;


class booking_printController extends Controller
{
	// protected $intinerary;
	// protected $detail_intinerary;
	// protected $d_booking;
	// protected $d_party_name;
	// protected $d_additional_booking;
	// protected $additional;

	// public function __construct(detail_intinerary $detail_intinerary,
	// 							intinerary $intinerary,
	// 							d_booking $d_booking,
	// 							d_party_name $d_party_name,
	// 							d_additional_booking $d_additional_booking,
	// 							additional $additional)
	// {
	// 	$this->detail_intinerary 	= new TestRepo($detail_intinerary);
 //        $this->intinerary 		 	= new TestRepo($intinerary);
 //        $this->d_booking 		 	= new TestRepo($d_booking);
 //        $this->d_party_name 	 	= new TestRepo($d_party_name);
 //        $this->d_additional_booking = new TestRepo($d_additional_booking);
 //        $this->additional 			= new TestRepo($additional);
        
	// }
    protected $all_variable;

    public function __construct()
    {
       $this->all_variable = new all_variable();
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
              $gg      = $id;
        $detil   = DB::table('m_detail_intinerary')->where('md_id',$id)->get();
        $tourled = DB::table('d_tour_leader')->where('tl_id',$detil[0]->md_tour_leader)->first();
        // return json_encode($tourled);
        // hitung bed
        $book_onlybed    = DB::table('m_detail_intinerary')
                                        ->select('dp_booking_id','dp_bed')
                                        ->leftjoin('d_booking','m_detail_intinerary.md_id','d_booking.db_intinerary_id') 
                                        ->leftjoin('d_party_name','d_booking.db_id','d_party_name.dp_booking_id') 
                                        ->where('md_id',$id)
                                        ->groupBy('dp_booking_id','dp_bed')
                                        ->get();
        

        $double = [];
        $doubletwincnb = [];
        $single = [];
        $twin = [];
        $triple = [];
        $doubletwincwb = [];

        for ($i=0; $i <count($book_onlybed) ; $i++) {
            if ($book_onlybed[$i]->dp_bed == 'double') {
                $double[$i] = $book_onlybed[$i]->dp_bed;
            }elseif ($book_onlybed[$i]->dp_bed == 'doubletwin&cnb') {
                $doubletwincnb[$i] = $book_onlybed[$i]->dp_bed;
            }elseif ($book_onlybed[$i]->dp_bed == 'single') {
                $single[$i] = $book_onlybed[$i]->dp_bed;
            }elseif ($book_onlybed[$i]->dp_bed == 'twin') {
                $twin[$i] = $book_onlybed[$i]->dp_bed;
            }elseif ($book_onlybed[$i]->dp_bed == 'triple') {
                $triple[$i] = $book_onlybed[$i]->dp_bed;
            }elseif ($book_onlybed[$i]->dp_bed == 'doubletwin&cwb') {
                $doubletwincwb[$i] = $book_onlybed[$i]->dp_bed;
            }
        }
        if ($double == null) {
            $double = 0;
        }else{
            $double = count($double)+1;
        }

        if ($doubletwincnb == null) {
            $doubletwincnb = 0;
        }else{
            $doubletwincnb = count($doubletwincnb);
        }

        if ($single == null) {
            $single = 0;
        }else{
            $single = count($single);
        }

        if ($twin == null) {
            $twin = 0;
        }else{
            $twin = count($twin);
        }

        if ($triple == null) {
            $triple = 0;
        }else{
            $triple = count($triple);
        }

        if ($doubletwincwb == null) {
            $doubletwincwb = 0;
        }else{
            $doubletwincwb = count($doubletwincwb);
        }

        $detail_intinerary = $this->all_variable->detail_intinerary()->cari('md_id',$id);

        $booking   = $detail_intinerary->book;
        $passenger = [];
        $id        = [];
        $room      = [];
        $bed       = [];
        $person    = [];
        for ($i=0; $i < count($booking); $i++) { 
            for ($a=0; $a < count($booking[$i]->party_name); $a++) { 
                array_push($passenger, $booking[$i]->party_name[$a]);
                array_push($id, $booking[$i]->party_name[$a]->dp_booking_id);
                $room[$i][$a] = $booking[$i]->party_name[$a]->dp_room; 
            }
            $room[$i] = array_unique($room[$i]);
            $room[$i] = array_values($room[$i]);
        }

        $id = array_unique($id);
        $id = array_values($id);
        // return $id;
        $flight = DB::table('m_flight_detail')->where('fd_intinerary_id',$detil[0]->md_intinerary_id)->get();
        for ($i=0; $i < count($id); $i++) { 
            for ($a=0; $a < count($room[$i]); $a++) { 
                for ($z=0; $z < count($booking[$i]->party_name); $z++) { 
                    if ($id[$i] == $booking[$i]->party_name[$z]->dp_booking_id and $room[$i][$a] == $booking[$i]->party_name[$z]->dp_room) {
                        $bed[$i][$a] = $booking[$i]->party_name[$z]->dp_bed;
                    }
                }
            }
        }
        
        
        for ($a=0; $a < count($room); $a++) { 
            for ($z=0; $z < count($room[$a]); $z++) { 
                for ($c=0; $c < count($booking[$a]->party_name); $c++) { 
                    if ($id[$a] == $booking[$a]->party_name[$c]->dp_booking_id and $room[$a][$z] == $booking[$a]->party_name[$c]->dp_room) {
                        $person[$a][$z][$c] = $booking[$a]->party_name[$c]->dp_bed;
                    }
                }
            }
            
        }
        // return $person;
        
        
        Excel::create('Excel '.date('d-m-y'), function($excel) use ($tourled,$double,$doubletwincnb,$single,$twin,$triple,$doubletwincwb,$passenger,$id,$room,$bed,$person,$booking,$detail_intinerary,$flight){
            $excel->sheet('New sheet', function($sheet) use ($tourled,$double,$doubletwincnb,$single,$twin,$triple,$doubletwincwb,$passenger,$id,$room,$bed,$person,$booking,$detail_intinerary,$flight) {
                $sheet->loadView('booking_print.booking_print_excel')
                ->with('passenger',$passenger)
                ->with('id',$id)
                ->with('room',$room)
                ->with('bed',$bed)
                ->with('person',$person)
                ->with('booking',$booking)
                ->with('flight',$flight)
                ->with('tourled',$tourled)
                ->with('double',$double)
                ->with('doubletwincnb',$doubletwincnb)
                ->with('single',$single)
                ->with('twin',$twin)
                ->with('triple',$triple)
                ->with('doubletwincwb',$doubletwincwb);
            });

        })->download('csv');
        // return view('booking_print.booking_print_excel',compact('double','doubletwincnb','single','twin','triple','doubletwincwb','tourled','flight','passenger','id','room','bed','person','booking','detail_intinerary'));
    }
    public function print_pdf($id)
    {
        $gg      = $id;
        $detil   = DB::table('m_detail_intinerary')->where('md_id',$id)->get();
        $tourled = DB::table('d_tour_leader')->where('tl_id',$detil[0]->md_tour_leader)->first();
        // hitung bed
        $book_onlybed    = DB::table('m_detail_intinerary')
                                        ->select('dp_booking_id','dp_bed')
                                        ->leftjoin('d_booking','m_detail_intinerary.md_id','d_booking.db_intinerary_id') 
                                        ->leftjoin('d_party_name','d_booking.db_id','d_party_name.dp_booking_id') 
                                        ->where('md_id',$id)
                                        ->groupBy('dp_booking_id','dp_bed')
                                        ->get();
        

        $double = [];
        $doubletwincnb = [];
        $single = [];
        $twin = [];
        $triple = [];
        $doubletwincwb = [];

        for ($i=0; $i <count($book_onlybed) ; $i++) {
            if ($book_onlybed[$i]->dp_bed == 'double') {
                $double[$i] = $book_onlybed[$i]->dp_bed;
            }elseif ($book_onlybed[$i]->dp_bed == 'doubletwin&cnb') {
                $doubletwincnb[$i] = $book_onlybed[$i]->dp_bed;
            }elseif ($book_onlybed[$i]->dp_bed == 'single') {
                $single[$i] = $book_onlybed[$i]->dp_bed;
            }elseif ($book_onlybed[$i]->dp_bed == 'twin') {
                $twin[$i] = $book_onlybed[$i]->dp_bed;
            }elseif ($book_onlybed[$i]->dp_bed == 'triple') {
                $triple[$i] = $book_onlybed[$i]->dp_bed;
            }elseif ($book_onlybed[$i]->dp_bed == 'doubletwin&cwb') {
                $doubletwincwb[$i] = $book_onlybed[$i]->dp_bed;
            }
        }
        if ($double == null) {
            $double = 0;
        }else{
            $double = count($double)+1;
        }

        if ($doubletwincnb == null) {
            $doubletwincnb = 0;
        }else{
            $doubletwincnb = count($doubletwincnb);
        }

        if ($single == null) {
            $single = 0;
        }else{
            $single = count($single);
        }

        if ($twin == null) {
            $twin = 0;
        }else{
            $twin = count($twin);
        }

        if ($triple == null) {
            $triple = 0;
        }else{
            $triple = count($triple);
        }

        if ($doubletwincwb == null) {
            $doubletwincwb = 0;
        }else{
            $doubletwincwb = count($doubletwincwb);
        }

        $detail_intinerary = $this->all_variable->detail_intinerary()->cari('md_id',$id);

        $booking   = $detail_intinerary->book;
        $passenger = [];
        $id        = [];
        $room      = [];
        $bed       = [];
        $person    = [];
        for ($i=0; $i < count($booking); $i++) { 
            for ($a=0; $a < count($booking[$i]->party_name); $a++) { 
                array_push($passenger, $booking[$i]->party_name[$a]);
                array_push($id, $booking[$i]->party_name[$a]->dp_booking_id);
                $room[$i][$a] = $booking[$i]->party_name[$a]->dp_room; 
            }
            $room[$i] = array_unique($room[$i]);
            $room[$i] = array_values($room[$i]);
        }

        $id = array_unique($id);
        $id = array_values($id);
        // return $id;
        $flight = DB::table('m_flight_detail')->where('fd_intinerary_id',$detil[0]->md_intinerary_id)->get();
        for ($i=0; $i < count($id); $i++) { 
            for ($a=0; $a < count($room[$i]); $a++) { 
                for ($z=0; $z < count($booking[$i]->party_name); $z++) { 
                    if ($id[$i] == $booking[$i]->party_name[$z]->dp_booking_id and $room[$i][$a] == $booking[$i]->party_name[$z]->dp_room) {
                        $bed[$i][$a] = $booking[$i]->party_name[$z]->dp_bed;
                    }
                }
            }
        }
        
        
        for ($a=0; $a < count($room); $a++) { 
            for ($z=0; $z < count($room[$a]); $z++) { 
                for ($c=0; $c < count($booking[$a]->party_name); $c++) { 
                    if ($id[$a] == $booking[$a]->party_name[$c]->dp_booking_id and $room[$a][$z] == $booking[$a]->party_name[$c]->dp_room) {
                        $person[$a][$z][$c] = $booking[$a]->party_name[$c]->dp_bed;
                    }
                }
            }
            
        }
        // return $person;
        
        return view('booking_print.booking_print_pdf',compact('double','doubletwincnb','single','twin','triple','doubletwincwb','tourled','flight','passenger','id','room','bed','person','booking','detail_intinerary'));

		// return view('',compact(''));
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
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml('booking_print.booking_print_passport', compact('data'));
        // $dompdf->stream();
        // $pdf = PDF::loadView('booking_print.booking_print_passport', compact('data'))->setPaper('a4','landscape')->download('Passport '.date('d-m-y').'.pdf');
		return view('booking_print.booking_print_passport',compact('data'));

        // $pdf = PDF::loadView('booking_print.booking_print_passport',compact('data'));
        // return $pdf->setPaper('A4', 'landscape')->->stream('temp.pdf');
    }
}
