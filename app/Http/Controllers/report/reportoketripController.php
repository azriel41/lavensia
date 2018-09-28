<?php

namespace App\Http\Controllers\report;

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
class reportoketripController extends Controller
{
	
    
    public function report_customer_oketrip()
    {	

    	$admin = DB::table('users')
    					->where('role_id',1)
    					->orWhere('role_id',2)
    					->orWhere('role_id',3)
    					->get();

    	$year_min = date("Y");
    	$month_min = date("m");

    	$year_max = date("Y");
    	$month_max = date("m");

    	$data_tgl = DB::select("SELECT extract(year from created_at) as yr, extract(month from created_at) as mon,count(dp_booking_id) as pax 
    								FROM d_party_name 
    								where YEAR(created_at) >= '$year_min' AND MONTH(created_at) >= '$month_min' 
    								AND YEAR(created_at) <= '$year_max' AND MONTH(created_at)  <= '$month_max' 
    								group by extract(year from created_at), extract(month from created_at)");

    	// return $data_tgl;

    	return view('report.report_oketrip.report_customer',compact('admin','data_tgl'));
    }
    public function datatale_report_customer_oketrip()
    {
        set_time_limit(30000);

        $data = DB::select("SELECT count('dp_name') as total_pax,db_id as kode,db_kode_transaksi FROM d_booking
                                left join d_party_name on d_party_name.dp_booking_id = d_booking.db_id
                                group by db_id,db_kode_transaksi");

        $pay = DB::select("SELECT sum(d_history_bayar_d.dhd_nominal) as total,dh_booking_id FROM d_history_bayar
                                inner join d_history_bayar_d on d_history_bayar_d.dhd_history_id = d_history_bayar.dh_id
                                where dh_status_payment = 'APPROVE'
                                group by dh_booking_id");

        // return $pay;
        $data = collect($data);

        return Datatables::of($data)
            ->addColumn('data', function($data) use ($pay) {
                for ($i=0; $i <count($pay); $i++) { 
                    if ($data->kode == $pay[$i]->dh_booking_id) {
                        return $pay[$i]->total;
                    }
                }
                
            })
            ->rawColumns(['data'])
            ->addIndexColumn()
            ->make(true);
    }
    public function datatale_report_profil_oketrip()
    {
        set_time_limit(30000);

        $data = DB::select("SELECT count('dp_name') as total_pax,db_id as kode,db_kode_transaksi,md_start,users.name FROM d_booking
                                left join d_party_name on d_party_name.dp_booking_id = d_booking.db_id
                                left join m_detail_intinerary on m_detail_intinerary.md_id = d_booking.db_intinerary_id
                                left join users on users.id = d_booking.created_by
                                group by db_id,db_kode_transaksi,md_start,users.name");

        $pay = DB::select("SELECT sum(d_history_bayar_d.dhd_nominal) as total,dh_booking_id FROM d_history_bayar
                                inner join d_history_bayar_d on d_history_bayar_d.dhd_history_id = d_history_bayar.dh_id
                                where dh_status_payment = 'APPROVE'
                                group by dh_booking_id");

        // return $pay;
        $data = collect($data);

        return Datatables::of($data)
            ->addColumn('data', function($data) use ($pay) {
                for ($i=0; $i <count($pay); $i++) { 
                    if ($data->kode == $pay[$i]->dh_booking_id) {
                        return $pay[$i]->total;
                    }
                }
                
            })
            ->rawColumns(['data'])
            ->addIndexColumn()
            ->make(true);
    }
    public function cari_report_customer_oketrip(Request $req)
    {
    	$year_min = substr($req->min,-4);
    	$month_min = substr($req->min,0,-5);

    	$year_max = substr($req->max,-4);
    	$month_max = substr($req->max,0,-5);

    	if ($req->admin != '' || $req->admin != null) {
            $admin = " AND created_by = '".$req->admin."' ";
        }else{
            $admin = '';
        }

    	// return $month_min.$year_min.$year_max.$month_max; 
    	$data_tgl = DB::select("SELECT extract(year from created_at) as yr, extract(month from created_at) as mon,count(dp_booking_id) as pax 
    								FROM d_party_name 
    								where YEAR(created_at) >= '$year_min' AND MONTH(created_at) >= '$month_min' 
    								AND YEAR(created_at) <= '$year_max' AND MONTH(created_at)  <= '$month_max' 
    								$admin
    								group by extract(year from created_at), extract(month from created_at)");
    	// return $data_tgl;
    	if ($data_tgl != null) {
	    	return view('report.report_oketrip.ajax_report_customer',compact('data','total','data_tgl'));
    	}else{
    		return response()->json(['status'=>'kosong']);
    	}
    }




    public function report_profit_oketrip()
    {	

    	$admin = DB::table('users')
    					->where('role_id',1)
    					->orWhere('role_id',2)
    					->orWhere('role_id',3)
    					->get();

    	$year_min = date("Y");
    	$month_min = date("m");

    	$year_max = date("Y");
    	$month_max = date("m");

    	$data_tgl = DB::select("SELECT extract(year from created_at) as yr, extract(month from created_at) as mon,sum(dh_total_payment) as pax 
    								FROM d_history_bayar 
    								where YEAR(created_at) >= '$year_min' AND MONTH(created_at) >= '$month_min' 
    								AND YEAR(created_at) <= '$year_max' AND MONTH(created_at)  <= '$month_max' 
    								AND dh_status_payment = 'APPROVE' 
    								group by extract(year from created_at), extract(month from created_at)");

    	return view('report.report_oketrip.report_profit',compact('admin','data_tgl'));
    }
    public function cari_report_profit_oketrip()
    {
    	$year_min = substr($req->min,-4);
    	$month_min = substr($req->min,0,-5);

    	$year_max = substr($req->max,-4);
    	$month_max = substr($req->max,0,-5);

    	if ($req->admin != '' || $req->admin != null) {
            $admin = " AND db_handle_by = '".$req->admin."' ";
        }else{
            $admin = '';
        }

    	// return $month_min.$year_min.$year_max.$month_max; 
    	$data_tgl = DB::select("SELECT extract(year from d_history_bayar.created_at) as yr, extract(month from d_history_bayar.created_at) as mon,sum(dh_total_payment) as pax 
    								FROM d_history_bayar 
    								left join d_booking on db_handle_by = db_id
    								where YEAR(d_history_bayar.created_at) >= '$year_min' AND MONTH(d_history_bayar.created_at) >= '$month_min' 
    								AND YEAR(d_history_bayar.created_at) <= '$year_max' AND MONTH(d_history_bayar.created_at)  <= '$month_max' 
    								AND dh_status_payment = 'APPROVE'
    								$admin
    								group by extract(year from d_history_bayar.created_at), extract(month from d_history_bayar.created_at)");
    	// return $data_tgl;
    	if ($data_tgl != null) {
	    	return view('report.report_oketrip.ajax_report_profit',compact('data','total','data_tgl'));
    	}else{
    		return response()->json(['status'=>'kosong']);
    	}
    }
    public function report_table_customer_oketrip(Request $req)
    {
        $admin = DB::table('users')
                        ->where('role_id',4)
                        ->where('co_name',Auth::user()->co_name)
                        ->orWhere('role_id',5)
                        ->get();
        return view('report.report_oketrip.report_table_profit',compact('admin','data_tgl'));
    }
    public function report_table_profit_oketrip(Request $req)
    {
        $admin = DB::table('users')
                        ->where('role_id',4)
                        ->where('co_name',Auth::user()->co_name)
                        ->orWhere('role_id',5)
                        ->get();
        return view('report.report_oketrip.report_table_profit',compact('admin','data_tgl'));
    }
}


