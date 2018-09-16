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
use App\d_history_bayar;
use App\d_history_bayar_d;
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
use Session;
class payment_page_controller extends Controller
{

    protected $intinerary;
    protected $detail_intinerary;
    protected $d_booking;
    protected $d_party_name;
    protected $d_additional_booking;
    protected $additional;
    protected $d_history_bayar;
    protected $d_history_bayar_d;
    public function __construct(detail_intinerary $detail_intinerary,
                                intinerary $intinerary,
                                d_booking $d_booking,
                                d_party_name $d_party_name,
                                d_additional_booking $d_additional_booking,
                                additional $additional,
                                d_history_bayar $d_history_bayar,
                                d_history_bayar_d $d_history_bayar_d
                            )
    {
        $this->detail_intinerary    = new TestRepo($detail_intinerary);
        $this->intinerary           = new TestRepo($intinerary);
        $this->d_booking            = new TestRepo($d_booking);
        $this->d_party_name         = new TestRepo($d_party_name);
        $this->d_additional_booking = new TestRepo($d_additional_booking);
        $this->additional           = new TestRepo($additional);
        $this->d_history_bayar      = new TestRepo($d_history_bayar);
        $this->d_history_bayar_d    = new TestRepo($d_history_bayar_d);
        
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
    public function save_first_payment(Request $req)
    {   
        DB::beginTransaction();
        try{
            $id = $this->d_history_bayar->max('dh_id');
            $head = array(
                           'dh_id'              => $id,
                           'dh_booking_id'      => $req->id,
                           'dh_total_payment'   => $req->total_pay,
                           'dh_payment_method'  => $req->payment,
                           'dh_status_payment'  => 'RELEASED',
                        );

            $upd = array(
                           'db_status'          => 'Hold By System',
                        );

            $this->d_history_bayar->create($head);

            $d_booking = $this->d_booking->cari('db_id',$req->id);
            $this->d_booking->update($upd,'db_id',$req->id);
            for ($b=0; $b < count($req->bank_number); $b++) { 
                $file = $req->file('image')[$b];
                if ($file != null) {
                    $filename = 'history_bayar/'.'BAYAR_PERTAMA'.'_'.$d_booking->db_kode_transaksi.'_'.$id.'.'.$file->getClientOriginalExtension();

                    Storage::put($filename,file_get_contents($file));
                }else{
                    return Response::json(['status'=>0,'message'=>'Check Your Proof Payment Photo...']);
                }

                $detail = array(
                           'dhd_history_id'      => $id,
                           'dhd_bank'            => strtoupper($req->bank_number[$b]),
                           'dhd_nominal'         => filter_var($req->nominal[$b],FILTER_SANITIZE_NUMBER_INT),
                           'dhd_nama_rekening'   => strtoupper($req->name[$b]),
                           'dhd_image'           => $filename,
                           'dhd_tanggal'         => carbon::parse(str_replace('/', '-', $req->date[$b]))->format('Y-m-d'),
                        );
                // dd($detail);
                $save = $this->d_history_bayar_d->create($detail);
            }

            DB::commit();
            return Response::json(['status'=>1,'id'=>$d_booking->db_kode_transaksi]);
        }catch(Exception $error){
            return Response::json(['status'=>0,'message'=>$error]);
            DB::rollBack();
        }
    }

    public function payment_termin(Request $req)
    {
        $booking = $this->d_booking->cari('db_id',$req->id);
        $history = $booking->payment;
        if ($history == null) {
            if (Auth::User() != null) {
                $cart = Auth::User()->booking;
                $jumlah = count(Auth::User()->booking);
                return view('operational.payment_user.payment_termin',compact('cart','jumlah','booking'));
            }else{
                return view('operational.payment_user.payment_termin','booking');
            }
        }else{
            if (Auth::User() != null) {
                $cart = Auth::User()->booking;
                $jumlah = count(Auth::User()->booking);
                return view('operational.payment_user.payment_user',compact('cart','jumlah','booking'));
            }else{
                return view('operational.payment_user.payment_user','booking');
            }

        }
        
    }
    public function save_termin(Request $req)
    {
        DB::beginTransaction();
        try{
            $id = $this->d_history_bayar->max('dh_id');
            $head = array(
                           'dh_id'              => $id,
                           'dh_booking_id'      => $req->id,
                           'dh_total_payment'   => $req->total_pay,
                           'dh_payment_method'  => 'DP',
                           'dh_status_payment'  => 'RELEASED',
                        );

            $this->d_history_bayar->create($head);

            $d_booking = $this->d_booking->cari('db_id',$req->id);
            for ($b=0; $b < count($req->bank_number); $b++) { 
                $file = $req->file('image')[$b];
                if ($file != null) {
                    $filename = 'history_bayar/'.'BAYAR_TERMIN'.'_'.$d_booking->db_kode_transaksi.'_'.$id.'.'.$file->getClientOriginalExtension();

                    Storage::put($filename,file_get_contents($file));
                }else{
                    return Response::json(['status'=>0,'message'=>'Check Your Proof Payment Photo...']);
                }

                $detail = array(
                           'dhd_history_id'      => $id,
                           'dhd_bank'            => strtoupper($req->bank_number[$b]),
                           'dhd_nominal'         => filter_var($req->nominal[$b],FILTER_SANITIZE_NUMBER_INT),
                           'dhd_nama_rekening'   => strtoupper($req->name[$b]),
                           'dhd_image'           => $filename,
                           'dhd_tanggal'         => carbon::parse(str_replace('/', '-', $req->date[$b]))->format('Y-m-d'),
                        );
                // dd($detail);
                $save = $this->d_history_bayar_d->create($detail);
            }

            DB::commit();
            return Response::json(['status'=>1,'id'=>$d_booking->db_kode_transaksi]);
        }catch(Exception $error){
            return Response::json(['status'=>0,'message'=>$error]);
            DB::rollBack();
        }
    }
}
