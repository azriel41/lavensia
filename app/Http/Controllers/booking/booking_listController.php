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
use Dompdf\Dompdf;
use PDF;

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
                        ->where('db_users',$user)
                    	->get();
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
                        ->whereRaw('db_total = db_total_remain')
                        ->get();


            $jumlah = count(DB::table('d_booking')
                        ->where('db_users',Auth::User()->role_id)
                        ->whereRaw('db_total = db_total_remain')
                        ->get());
            return view('booking_list.booking_list',compact('data','category','intinerary','det','response','cart','jumlah'));
        }else{
            return view('booking_list.booking_list',compact('data','category','intinerary','det','response'));
        }
    	
    }
    public function bookingdetail($id)
    {
		$data = DB::table('d_booking')
						->leftjoin('d_additonal_booking','d_additonal_booking.da_booking_id','=','d_booking.db_id')
						->leftjoin('m_detail_intinerary','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')	
						->leftjoin('m_intinerary','m_intinerary.mi_id','=','m_detail_intinerary.md_intinerary_id')	
						->leftjoin('users','users.id','=','d_booking.db_handle_by')	
						->leftjoin('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')	
						->where('db_kode_transaksi',$id)
						->get();    	
		// return $data;
        $simple_table = DB::table('d_booking')->leftjoin('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')->where('db_kode_transaksi',$id)->get();
                       
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
            return view('booking_list.booking_listdetail',compact('data','category','intinerary','det','response','cart','jumlah','simple_table'));
        }else{
            return view('booking_list.booking_listdetail',compact('data','category','intinerary','det','response','simple_table'));
        }

    }
    public function bookingdetail_download_itin($id)
    {

    	$data = DB::table('m_intinerary')->where('mi_id',$id)->get();
    	$gg = $data[0]->mi_pdf;
    	if ($gg == null) {
    		return view('pdf_kosong');
    	}
    	$file = realpath('.').'/storage/app/'.$gg;

    	// return $file;
		$headers = [
              'Content-Type' => 'application/pdf',
         ];

		return response()->download($file);
    }
    public function bookingdetail_download_pdf($id)
    {
        

    	$detail_intinerary = $this->all_variable->detail_intinerary()->cari('md_id',$req->id);

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
        
        return view('master.master_intinerary.detail_intinerary',compact('passenger','id','room','bed','person','booking','detail_intinerary'));
        
  //   	$data = DB::table('d_booking')->where('db_id',$id)->get();
  //   	$gg = $data[0]->db_pdf;
  //   	if ($gg == null) {
  //   		return view('pdf_kosong');
  //   	}
  //   	$file = realpath('.').'/storage/app/'.$gg;

  //   	// return $file;
		// $headers = [
  //             'Content-Type' => 'application/pdf',
  //        ];

		// return response()->download($file);
    }
    public function bookingdetail_download_md_tata_tertib($id)
    {

    	$data = DB::table('m_detail_intinerary')->where('md_intinerary_id',$id)->get();
    	$gg = $data[0]->md_tata_tertib;
    	if ($gg == null) {
    		return view('pdf_kosong');
    	}
    	$file = realpath('.').'/storage/app/'.$gg;

    	// return $file;
		$headers = [
              'Content-Type' => 'application/pdf',
         ];

		return response()->download($file);
    }
    public function bookingdetail_download_final($id)
    {

    	$data = DB::table('m_detail_intinerary')->where('md_intinerary_id',$id)->get();
    	$gg = $data[0]->md_final;
    	if ($gg == null) {
    		return view('pdf_kosong');
    	}
    	$file = realpath('.').'/storage/app/'.$gg;

    	// return $file;
		$headers = [
              'Content-Type' => 'application/pdf',
         ];

		return response()->download($file);
    }
    public function bookingdetail_download_invoice($id)
    {
        

    	$data = DB::table('d_booking')
            ->leftjoin('d_history_bayar','d_history_bayar.dh_booking_id','=','d_booking.db_id')
    		->leftjoin('m_detail_intinerary','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')
    		->leftjoin('users','users.id','=','d_booking.db_users')
    		->leftjoin('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')
    		->where('db_id',$id)->get();

		// return $data;        	

        $add_book = DB::table('d_additonal_booking')
            ->leftjoin('m_additional','m_additional.ma_id','=','d_additonal_booking.da_additional_id')
            ->where('da_booking_id',$id)->get();

        $pdf = PDF::loadView('booking_print.booking_print_invoice',compact('data','add_book'));
        return $pdf->setPaper('A4', 'landscape')->stream('temp.pdf');

		return view('booking_print.booking_print_invoice',compact('data'));
    }
    
}
