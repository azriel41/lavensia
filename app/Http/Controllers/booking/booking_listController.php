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
use App\all_variable;
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
	// protected $intinerary;
	// protected $detail_intinerary;
	// protected $d_booking;
	// protected $d_party_name;
	// protected $d_additional_booking;
    protected $all_variable;
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

    public function __construct()
    {
       $this->all_variable = new all_variable();
    }
    public function booking_list(Request $req)
    {
    	$user = Auth::user()->id;

  		$data = DB::Table('d_booking as db')
    					->leftjoin('m_detail_intinerary as mid','db.db_intinerary_id','=','mid.md_id')
                        ->leftjoin('m_intinerary as mi','mid.md_intinerary_id','=','mi.mi_id')
						->leftjoin('users as us','us.id','=','db.db_handle_by')	
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
                        ->where('db_status','Waiting List')
                        ->get();


            $jumlah = count(DB::table('d_booking')
                        ->where('db_users',Auth::User()->role_id)
                        ->where('db_status','Waiting List')
                        ->get());
            return view('booking_list.booking_list',compact('data','category','intinerary','det','response','cart','jumlah'));
        }else{
            return view('booking_list.booking_list',compact('data','category','intinerary','det','response'));
        }
    	
    }
    public function bookingdetail($id)
    {
		$data = DB::table('d_booking')
                        ->select('handle.name as handle','bookby.name as bookby','d_booking.*','m_intinerary.*','d_additonal_booking.*','m_detail_intinerary.*','d_party_name.*')
						->leftjoin('d_additonal_booking','d_additonal_booking.da_booking_id','=','d_booking.db_id')
						->leftjoin('m_detail_intinerary','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')	
						->leftjoin('m_intinerary','m_intinerary.mi_id','=','m_detail_intinerary.md_intinerary_id')	
                        ->leftjoin('users as handle','handle.id','=','d_booking.db_handle_by') 
						->leftjoin('users as bookby','bookby.id','=','d_booking.created_by')	
						->leftjoin('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')	
						->where('db_kode_transaksi',$id)
						->get();    	
		// return $data;

        $simple_table = DB::table('d_booking')->leftjoin('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')->where('db_kode_transaksi',$id)->get();
        
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
                        ->where('db_status','Waiting List')
                        ->get();


            $jumlah = count(DB::table('d_booking')
                        ->where('db_users',Auth::User()->role_id)
                        ->where('db_status','Waiting List')
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
    	$gg = $id;
        $detil = DB::table('m_detail_intinerary')->where('md_id',$id)->get();

        // $data = DB::table('m_intinerary')
                    //  ->join('m_detail_intinerary','m_intinerary.mi_id','=','m_detail_intinerary.md_intinerary_id')
                    //  ->join('d_booking','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')
                    //  ->join('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')
                    //  ->where('db_intinerary_id','=',$id)
                    //  ->get();
        // return $data;

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
        
        $pdf = PDF::loadView('booking_print.booking_print_pdf',compact('flight','passenger','id','room','bed','person','booking','detail_intinerary'));
        // return view('booking_print.booking_print_pdf',compact('flight','passenger','id','room','bed','person','booking','detail_intinerary'));
        return $pdf->setPaper('A4', 'potrait')->download('booking_detail.pdf');
    }
    public function datatable_booking_list()
    {
        $user = Auth::user()->id;

        $data = DB::Table('d_booking as db')
                        ->leftjoin('m_detail_intinerary as mid','db.db_intinerary_id','=','mid.md_id')
                        ->leftjoin('m_intinerary as mi','mid.md_intinerary_id','=','mi.mi_id')
                        ->leftjoin('users as us','us.id','=','db.db_handle_by') 
                        ->where('db_users',$user)   
                        ->get();
        
        $data = collect($data);
        return Datatables::of($data)
                        ->addColumn('bookingdetail', function ($data) {
                            return "<a class='btn btn-sm btn-book'  href='bookingdetail/".$data->db_kode_transaksi."'>".$data->db_kode_transaksi."</a>";
                        })
                        ->addColumn('date', function ($data) {
                            return date('d F Y',strtotime($data->created_at));
                        })
                        ->addColumn('date_start', function ($data) {
                            return date('d F Y',strtotime($data->md_start));
                        })
                        ->addColumn('grup', function ($data) {
                            return '<span>'.$data->mi_name.'</span>';
                        })
                        ->addColumn('bookby', function ($data) {
                            return '<span>'.$data->created_by.'</span>';
                        })
                        ->addColumn('status', function ($data) {
                            $parent = $data->db_status;

                            $a = '<span class="label label-primary"> '.$data->db_status.'</span>';

                            $b = '<span class="label label-success"> '.$data->db_status.'</span>';

                            $c = '<span class="label label-danger"> '.$data->db_status.'</span>';

                            $d = '<span class="label label-info"> '.$data->db_status.'</span>';

                            if ($parent == 'Waiting List') {
                                return $a;
                            }elseif ($parent == 'Holding Confirm') {
                                return $b;
                            }elseif ($parent == 'Canceled') {
                                return $c;
                            }else {
                                return $d;
                            }
                        })
                        ->addColumn('pay', function ($data) {
                            $a = '<span class="label label-success">Lunas</span>';

                            $b = '<span class="label label-danger">Belum Lunas</span>';

                            if ($data->db_total_remain == 0) {
                                return $a;
                            }else {
                                return $b;
                            }
                        })
                        ->addColumn('termin', function ($data) {
                            $a = '<button class="btn btn-sm btn-deault" disabled=""> <i class="fa fa-money"></i> Pay</button>';

                            // $b = '<a class="btn btn-sm btn-book payment" href="URL"><i class="fa fa-money"></i> Pay';
                            $b = '<button class="btn btn-sm btn-book payment" data-id='.$data->db_id.'> <i class="fa fa-money"></i> Pay</button>';

                            if ($data->db_total_remain == 0) {
                                return $a;
                            }else {
                                return $b;
                            }
                        })
                        ->rawColumns(['bookingdetail','date','status','pay','termin','date_start','grup','bookby'])
                        ->addIndexColumn()
                        ->make(true);
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
        $plus = DB::table('d_history_bayar')->where('dh_booking_id',$id)->get();

        // return $plus;
        // if ($plus[0]->dh_print == 0 ) {
        //     $plus1 = 1;
        // }else{
        //     $plus1 =+ 1; 
        // }
        // return $plus1;
        
        // $upd = DB::table('d_history_bayar')->where('dh_booking_id',$id)->update(['dh_print'=>$plus1]);

    	$data = DB::table('d_booking')
            ->leftjoin('d_history_bayar','d_history_bayar.dh_booking_id','=','d_booking.db_id')
    		->leftjoin('m_detail_intinerary','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')
    		->leftjoin('users','users.id','=','d_booking.db_users')
            ->leftjoin('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')
            // ->leftjoin('d_additonal_booking','d_additonal_booking.da_booking_id','=','d_booking.db_id')
    		->where('db_id',$id)->get()->toArray();

        // return $data;

        $total_1 = [];
        $total_2 = [];
        $total_3 = [];
        for ($i=0; $i <count($data) ; $i++) { 
            if ($data[$i]->dp_status_person == 'adult') {
                $total_1[$i] = $data[$i]->md_adult_price;
            }elseif ($data[$i]->dp_status_person == 'child' && $data[$i]->dp_status_person == 'doubletwin&cnb') {
                $total_2[$i] = $data[$i]->md_child_price;
            }elseif ($data[$i]->dp_status_person == 'child' && $data[$i]->dp_status_person == 'doubletwin&cwb') {
                $total_3[$i] = $data[$i]->md_child_w_price;
            }elseif ($data[$i]->dp_status_person == 'baby') {
                $total_4[$i] = $data[$i]->md_infant_price;
            }
        }
        if ($total_1 == null) {
            $total_1 = [0];
        }elseif ($total_2 == null) {
            $total_2 = [0];
        }elseif ($total_3 == null) {
            $total_3 = [0];
        }elseif ($total_4 == null) {
            $total_4 = [0];
        }
        $total_pax = array_sum($total_1)+array_sum($total_2)+array_sum($total_3)+array_sum($total_4);


        $add_book = DB::table('d_additonal_booking')
            ->leftjoin('m_additional','m_additional.ma_id','=','d_additonal_booking.da_additional_id')
            ->where('da_booking_id',$id)->get()->toArray();
        
        $add = [];
        for ($i=0; $i <count($add_book) ; $i++) { 
            $add[$i] = $add_book[$i]->da_price;
        }
        if ($add == null) {
            $add = [0];
        }
        $total_add = array_sum($add);


        $data_w_bay = DB::table('d_booking')
            ->leftjoin('d_history_bayar','d_history_bayar.dh_booking_id','=','d_booking.db_id')
            ->leftjoin('m_detail_intinerary','m_detail_intinerary.md_id','=','d_booking.db_intinerary_id')
            ->leftjoin('users','users.id','=','d_booking.db_users')
            ->leftjoin('d_party_name','d_party_name.dp_booking_id','=','d_booking.db_id')
            // ->leftjoin('d_additonal_booking','d_additonal_booking.da_booking_id','=','d_booking.db_id')
            ->where('db_id',$id)->where('dp_status_person','!=','baby')->get()->toArray();

        // return $data_w_bay;
        $tips = count($data_w_bay)*$data[0]->db_tips;
        $agen_com = count($data_w_bay)*$data[0]->db_agent_com;
        $tax = count($data_w_bay)*$data[0]->db_tax;
        $visa = count($data_w_bay)*$data[0]->db_visa;

        $grand_total = $total_pax+$total_add+$tips+$agen_com+$tax+$visa;

        // $pdf = PDF::loadView('booking_print.booking_print_invoice',compact('agen_com','tax','visa','tips','data','add_book','total_pax','total_add','grand_total'));
        // return $pdf->setPaper('A4', 'landscape')->stream('temp.pdf');

		return view('booking_print.booking_print_invoice',compact('agen_com','tax','visa','tips','data','add_book','total_pax','total_add','grand_total'));
    }
    
}
