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
    public function __construct(detail_intinerary $detail_intinerary,
                                intinerary $intinerary,
                                d_booking $d_booking,
                                d_party_name $d_party_name,
                                d_additional_booking $d_additional_booking,
                                additional $additional,
                                d_history_bayar $d_history_bayar)
    {
        $this->detail_intinerary    = new TestRepo($detail_intinerary);
        $this->intinerary           = new TestRepo($intinerary);
        $this->d_booking            = new TestRepo($d_booking);
        $this->d_party_name         = new TestRepo($d_party_name);
        $this->d_additional_booking = new TestRepo($d_additional_booking);
        $this->additional           = new TestRepo($additional);
        $this->d_history_bayar      = new TestRepo($d_history_bayar);
        
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
            DB::commit();
            $file = $req->file('image');


            $id = $this->d_history_bayar->max('dh_id');

            $filename = 'payment_proof/'.'bukti_'.$req->bank_name.'_'.$req->bank_number.'_'.$id.'.'.$file->getClientOriginalExtension();

            Storage::put($filename,file_get_contents($file));

            $data = array(
                           'dh_id'              => $id,
                           'dh_booking_id'      => $req->id,
                           'dh_account_name'    => $req->bank_name,
                           'dh_account_number'  => $req->bank_number,
                           'dh_image'           => $filename,
                           'dh_nominal'         => filter_var($req->nominal,FILTER_SANITIZE_NUMBER_INT),
                           'dh_payment_method'  => $req->payment,
                        );

            $this->d_history_bayar->create($data);

            d_booking::where('db_id',$req->id)->update([
                                    'db_status' => 'Holding Confirm'
                                ]);

        return redirect()->route('dashboard');
        }catch(Exception $error){
        return redirect()->back()->withErrors(['msg', 'Server Mengalami Masalah']);
        DB::rollBack();
        }
    }
}
