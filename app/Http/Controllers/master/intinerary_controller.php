<?php

namespace App\Http\Controllers\master;

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
class intinerary_controller extends Controller
{
    protected $model;
    protected $category;
	protected $additional;

	public function __construct(intinerary $intinerary,category $category,additional $additional)
	{
	   // set the model
	   $this->model = new TestRepo($intinerary);
       $this->category = new TestRepo($category);
       $this->additional = new TestRepo($additional);
	}
    public function index()
    {
        $data = intinerary::all();
    	return view('master.master_intinerary.index_intinerary',compact('data'));
    }

    public function datatable_intinerary()
    {
        $data = $this->model->all();
           
        
        $data = collect($data);

        return Datatables::of($data)
                        ->addColumn('aksi', function ($data) {
                            return'<div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="material-icons">settings</i>
                                    Manage <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" style="padding:0px">
                                    <li class="bg-orange">
                                        <a href="'.url('/master/master_intinerary/edit').'/'.$data->mi_id.'" class=" waves-effect waves-block" style="color:white">
                                            <i class="material-icons">edit</i>
                                            Edit
                                        </a>
                                    </li>
                                    <li class="bg-red">
                                        <a onclick="deleting(\''.$data->mi_id.'\')" class="waves-effect waves-block" style="color:white">
                                            <i class="material-icons">delete</i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>';
                        })
                        ->addColumn('departure', function ($data) {
                            return'<button onclick="departure(\''.$data->mi_id.'\')" type="button" class="btn bg-pink waves-effect m-r-20" data-toggle="modal" data-target="#departure">
                                    <i class="material-icons">extensions</i>
                                   </button>';
                        })
                        ->addColumn('schedule', function ($data) {
                            return'<button onclick="schedule(\''.$data->mi_id.'\')" type="button" class="btn bg-cyan waves-effect m-r-20" data-toggle="modal" data-target="#schedule">
                                    <i class="material-icons">extensions</i>
                                   </button>';
                        })
                        ->addColumn('category', function ($data) {
                            return $data->category->mc_name;
                        })
                        ->rawColumns(['aksi','category','schedule','departure'])
                        ->addIndexColumn()
                        ->make(true);
    }

    public function create()
    {



        $bulan = Carbon::now()->format('m');
        $tahun = Carbon::now()->format('y');
    	$id = $this->model->max('mi_id');
        $index = str_pad($id, 3, '0', STR_PAD_LEFT);
        $nota = 'LCV' .$bulan.$tahun.'/'. $index;  
        $additional = $this->additional->all();
        $category =  $this->category->all();
    	return view('master.master_intinerary.create_intinerary',compact('category','nota','additional'));
    }

    public function edit($id)
    {
        $data = $this->model->same('mi_id',$id);
        $category =  $this->category->all();
        $additional = $this->additional->all();

        return view('master.master_intinerary.edit_intinerary',compact('category','data','additional'));
    }


    public function save(Request $req)
    {
        return DB::transaction(function() use ($req) {  
            $name = Auth::user()->name;
            $intinerary = new intinerary();
            $intinerary = new TestRepo($intinerary);
            $schedule   = new schedule();
            $schedule   = new TestRepo($schedule);
            $detail_intinerary   = new detail_intinerary();
            $detail_intinerary   = new TestRepo($detail_intinerary);
            $m_additional_intinerary   = new m_additional_intinerary();
            $m_additional_intinerary   = new TestRepo($m_additional_intinerary);


            $check = $intinerary->same('mi_nota',$req->tour_code);

            $file = $req->file('image');
            if ($file != null) {

                $tour_code = str_replace('/', '-', $req->tour_code);
                $photo = 'itinerary/PHOTO_'.$tour_code.'.'.$file->getClientOriginalExtension();

                Storage::put($photo,file_get_contents($req->file('image')));
            }else{
                if ($check != null) {
                    $photo = $check->mi_image;
                }else{
                    return Response::json(['status'=>0,'message'=>'Please Put Your Photo...']);
                }
            }
            // dd($req->file('pdf'));
            $file = $req->file('pdf');
            if ($file != null) {

                $tour_code = str_replace('/', '-', $req->tour_code);
                $pdf = 'itinerary/PDF_'.$tour_code.'.'.$file->getClientOriginalExtension();

                Storage::put($pdf,file_get_contents($req->file('pdf')));
            }else{
                if ($check != null) {
                    $pdf = $check->mi_pdf;
                }else{
                    return Response::json(['status'=>0,'message'=>'Please Put Your PDF...']);
                }
            }
            
            $head = array(
                    'mi_nota'       => $req->tour_code,
                    'mi_name'       => $req->intinerary,
                    'mi_image'      => $photo,
                    'mi_pdf'        => $pdf,
                    'mi_term'       => $req->term,
                    'category_id'   => $req->category,
                    'mi_highlight'  => strtoupper($req->highlight),
                    'mi_by'         => strtoupper($req->caption_by),
                    'updated_at'    => Carbon::now(),
                    'updated_by'    => $name
                    );
            if ($check == null) {
                $id = $intinerary->max('mi_id');
                $head['created_at'] = Carbon::now();
                $head['created_by'] = $name;
                $head['mi_id']      = $id;
                $save_head = $intinerary->create($head);
            }else{
                $id = $check->mi_id;
                $update_head = $intinerary->update($head,'mi_nota',$req->tour_code);
            }

            $m_additional_intinerary->delete('intinerary_mi_id',$id);
            for ($i=0; $i < count($req->additional); $i++) { 
                $add = array(
                    'intinerary_mi_id'       => $id,
                    'additional_ma_id'       => $req->additional[$i],
                );

                $m_additional_intinerary->create($add);
            }
            $delete = $schedule->delete('ms_intinerary_id',$id);
            for ($i=0; $i < count($req->day); $i++) { 
                $sched = array(
                    'ms_intinerary_id'  => $id,
                    'ms_detail'         => $i+1,
                    'ms_caption'        => strtoupper($req->caption_schedule[$i]),
                    'ms_description'    => $req->description_schedule[$i],
                    'ms_bld'            => $req->BLD[$i],
                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now(),
                    'created_by'        => $name,
                    'updated_by'        => $name
                );

                $save_schedule = $schedule->create($sched);
            }
            $all_detail = $detail_intinerary->show('md_intinerary_id',$id)->toArray();

            $temp = [];

            for ($i=0; $i < count($req->detail_id); $i++) { 
                for ($a=0; $a < count($all_detail); $a++) { 
                    if ($all_detail[$a]['md_detail'] == $req->detail_id[$i]) {
                        array_push($temp, $req->detail_id[$i]);
                    }
                }
            }
            $detail_intinerary->deleteNotSame('md_intinerary_id',$id,'md_detail',$temp);
            for ($i=0; $i < count($req->detail_id); $i++) { 
                $det = array(
                    'md_intinerary_id'  => $id,
                    'md_start'          => Carbon::parse($req->start[$i])->format('Y-m-d'),
                    'md_end'            => Carbon::parse($req->end[$i])->format('Y-m-d'),
                    'md_adult_price'    => filter_var($req->adult_price[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_child_price'    => filter_var($req->child_price[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_infant_price'   => filter_var($req->infant_price[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_child_w_price'  => filter_var($req->child_w_price[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_seat'           => $req->seat[$i]-1,
                    'md_seat_remain'    => $req->seat[$i],
                    'md_dp'             => filter_var($req->minimal_dp[$i],FILTER_SANITIZE_NUMBER_INT),
                    'updated_at'        => Carbon::now(),
                    'updated_by'        => $name
                );


                if ($req->detail_id[$i] != '0') {
                    $cari_seat = $detail_intinerary->show_detail_one('md_intinerary_id',$id,'md_detail',$req->detail_id[$i]);
                    if ($cari_seat->md_seat == $cari_seat->md_seat_remain) {
                        $update_detail = $detail_intinerary->update_detail($det,'md_intinerary_id',$id,'md_detail',$req->detail_id[$i]);
                    }
                }else{
                    $id_dt = $detail_intinerary->max_detail('md_intinerary_id',$id,'md_detail');
                    $index = str_pad($id_dt, 3, '0', STR_PAD_LEFT);
                    $nota = $req->tour_code.'/'. $index;  
                    $det['created_at'] = Carbon::now();
                    $det['created_by'] = $name;
                    $det['md_detail']  = $id_dt;
                    $det['md_nota']    = $nota;
                    $save_detail = $detail_intinerary->create($det);
                }
            }

            // dd($detail_intinerary->show('md_intinerary_id',$id)->toArray());

            return Response::json(['status'=>1]);
        });
    }

    public function schedule(Request $req)
    {
        $data = $this->model->same('mi_id',$req->mc_id);


        return view('master.master_intinerary.table_schedule',compact('data'));
    }

    public function departure(Request $req)
    {
        $data = $this->model->same('mi_id',$req->mc_id);

        return view('master.master_intinerary.table_departure',compact('data'));

    }

    public function delete(Request $req)
    {
        return DB::transaction(function() use ($req) {  
            $detail_intinerary   = new detail_intinerary();
            $detail_intinerary   = new TestRepo($detail_intinerary);
            $all_detail = $detail_intinerary->show('md_intinerary_id',$req->id)->toArray();
            $temp = [];
            for ($a=0; $a < count($all_detail); $a++) { 
                if ($all_detail[$a]['md_seat'] != $all_detail[$a]['md_seat_remain']) {
                    array_push($temp, 0);
                }else{
                    array_push($temp, 1);
                }
            }
            if (in_array(0, $temp)) {
                return Response::json(['status'=>0,'message'=>'Data Tidak Bisa Dihapus Karena Terdapat Seat Yang Berkurang']);
            }else{
                $this->model->delete('mi_id',$req->id);
                return Response::json(['status'=>1]);
            }
        });
    }
}
