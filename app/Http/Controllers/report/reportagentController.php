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
class reportagentController extends Controller
{
	
    
    public function report_customer_agent()
    {	
    	$admin = DB::table('users')
                        ->where('role_id',4)
    					->where('co_name',Auth::user()->co_name)
    					->orWhere('role_id',5)
    					->get();

    	 return view('report.report_agent.report_customer',compact('admin','data_tgl'));
    }
    public function datatale_report_customer_agent()
    {
        set_time_limit(30000);

        $data = DB::select('SELECT * FROM o_member 
                            left join m_keterangan_member on m_keterangan_member.mk_code = o_member.om_keterangan_mem
                            left join m_bank on m_bank.mb_code = o_member.om_bank
                            left join m_web_registration on m_web_registration.mw_code = o_member.om_web_regist
                            left join users on users.id = o_member.om_operator
                            ');
        // return $data;
        $seq = DB::select("SELECT ot_member as om_cd,sum(ot_sales) sales,sum(ot_purchase) purchase FROM o_transaction group by ot_member");

        if ($seq == null) {
            $seq = 'kosong';
        }
        // return $seq;
        // $data = array_merge($data1,$seq);
        $data = collect($data);
        // return $data;

        return Datatables::of($data)
            ->addColumn('aksi', function ($data) {
                return'<div class="btn-group">
                            <a href="'.$data->om_code .'/edit_member" class="btn btn-sm txt-color-white bg-color-orange"><i class="fa fa-pencil-square-o"></i></a>
                       </div>';
            })
            ->addColumn('sales', function($data) {
                    $seq = DB::select("SELECT ot_member,sum(ot_sales) sales,sum(ot_purchase) purchase FROM o_transaction group by ot_member");
                    for ($i=0; $i <count($seq) ; $i++) { 
                        if ($data->om_code == $seq[$i]->ot_member) {
                            return 'Rp. '.number_format($seq[$i]->sales,0,'','.');
                        }
                    }
                    
            })
            ->addColumn('purchase', function($data) {
                    $seq = DB::select("SELECT ot_member,sum(ot_sales) sales,sum(ot_purchase) purchase FROM o_transaction group by ot_member");
                    for ($i=0; $i <count($seq) ; $i++) { 
                        if ($data->om_code == $seq[$i]->ot_member) {
                            return 'Rp. '.number_format($seq[$i]->purchase,0,'','.');
                        }
                    }
            })
            ->addColumn('detail', function ($data) {
                return'<button onclick="detail(\''.$data->om_code.'\')" type="button" class="btn btn-sm btn-primary btn-xl" data-toggle="modal">
                        <i class="fa fa-fw fa-th"></i>
                       </button>';
            })
            
           
            ->rawColumns(['aksi','sales','purchase','detail'])
            ->addIndexColumn()
            ->make(true);
    }
    public function cari_report_customer_agent(Request $req)
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
	    	return view('report.report_agent.ajax_report_customer',compact('data','total','data_tgl'));
    	}else{
    		return response()->json(['status'=>'kosong']);
    	}
    }

    public function report_profit_agent()
    {	

    	$admin = DB::table('users')
                        ->where('role_id',4)
                        ->where('co_name',Auth::user()->co_name)
                        ->orWhere('role_id',5)
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

    	return view('report.report_agent.report_profit',compact('admin','data_tgl'));
    }
    public function cari_report_profit_agent()
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
	    	return view('report.report_agent.ajax_report_profit',compact('data','total','data_tgl'));
    	}else{
    		return response()->json(['status'=>'kosong']);
    	}
    }
    public function report_table_customer_agent(Request $req)
    {   
        $admin = DB::table('users')
                        ->where('role_id',4)
                        ->where('co_name',Auth::user()->co_name)
                        ->orWhere('role_id',5)
                        ->get();
        return view('report.report_agent.report_table_customer',compact('admin','data_tgl'));

    }
    public function report_table_profit_agent(Request $req)
    {
        $admin = DB::table('users')
                        ->where('role_id',4)
                        ->where('co_name',Auth::user()->co_name)
                        ->orWhere('role_id',5)
                        ->get();
        return view('report.report_agent.report_table_profit',compact('admin','data_tgl'));
    }
}


