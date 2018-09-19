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
    public function cari_report_profit_oketrip(Request $req)
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
}


