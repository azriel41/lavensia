<?php

namespace App\Http\Controllers\finance;

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
use App\d_history_bayar;
use Exception;
use Session;

class finance_controller extends Controller
{
    public function finance(Request $req)
    {
    	if ((isset($req->start)) or ($req->start != '')) {
    		$start = carbon::parse($req->start)->format('m');
          	$start = 'and MONTH(created_at) >= '."'$start'";
    	}else{
    		$start = '';
    	}

    	if ((isset($req->end)) or ($req->end != '')) {
    		$end = carbon::parse($req->end)->format('m');
          	$end = 'and MONTH(created_at) <= '."'$end'";
    	}else{
    		$end = '';
    	}

    	if ($req->start) {
    		$awal = carbon::parse($req->start)->format('d-m-Y');
    	}else{
    		$awal = '';
    	}

    	if ($req->end) {
    		$akhir = carbon::parse($req->end)->format('d-m-Y');
    	}else{
    		$akhir = '';
    	}
    	$data = d_booking::whereRaw("db_id != '0' $start $end")->take(5000)
    			  ->get();
    	return view('finance.finance.finance',compact('data','awal','akhir'));
    }

    public function laba_rugi(Request $req)
    {

        if ((isset($req->start)) or ($req->start != '')) {
            $start = carbon::parse($req->start)->format('m');
            $start = 'and MONTH(created_at) >= '."'$start'";
        }else{
            $start = '';
        }

        if ((isset($req->end)) or ($req->end != '')) {
            $end = carbon::parse($req->end)->format('m');
            $end = 'and MONTH(created_at) <= '."'$end'";
        }else{
            $end = '';
        }

        if ($req->start) {
            $awal = carbon::parse($req->start)->format('F Y');
        }else{
            $awal = '';
        }

        if ($req->end) {
            $akhir = carbon::parse($req->end)->format('F Y');
        }else{
            $akhir = '';
        }

        $bulan = [];
        $bulan['head'] = [];
        $bulan['date'] = [];
        $sql_bulan = d_booking::select('created_at as bulan')->whereRaw("db_id != '0' $start $end")->take(5000)
                            ->get();
        foreach ($sql_bulan as $i => $b) {
            $bulan['head'][$i] = carbon::parse($b->bulan)->format('M Y');
            $bulan['date'][$i] = carbon::parse($b->bulan)->format('m-Y');
        }
        $bulan['head'] = array_unique($bulan['head']);
        $bulan['head'] = array_values($bulan['head']);
        $bulan['date'] = array_unique($bulan['date']);
        $bulan['date'] = array_values($bulan['date']);

        if ($req->start) {
            $awal = carbon::parse($req->start)->format('F Y');
        }else{
            $awal = '';
        }

        if ($req->end) {
            $akhir = carbon::parse($req->end)->format('F Y');
        }else{
            $akhir = '';
        }

        $data = d_booking::whereRaw("db_id != '0' $start $end")->take(5000)
                  ->get();
    	return view('finance.laba_rugi.laba_rugi',compact('bulan','data','awal','akhir'));
    }
}
