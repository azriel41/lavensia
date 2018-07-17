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

	public function __construct(intinerary $intinerary)
	{
	   // set the model
	   $this->model = new TestRepo($intinerary);
	}
    public function index()
    {
    	return view('master.master_intinerary.index_intinerary');
    }

    public function datatable_intinerary()
    {
        $data = $this->model->all();
        
        
        $data = collect($data);
        return Datatables::of($data)
                        ->addColumn('aksi', function ($data) {
                                   
                        })
                        ->rawColumns(['aksi'])
                        ->addIndexColumn()
                        ->make(true);
    }

    public function create()
    {
        $bulan = Carbon::now()->format('m');
        $tahun = Carbon::now()->format('y');
    	$category = new category();
    	$category = new TestRepo($category);
    	$id = $this->model->max('mi_id');
        $index = str_pad($id, 3, '0', STR_PAD_LEFT);
        $nota = 'TR' .$bulan.$tahun.'/'. $index;  

        $data =  $category->all();
    	return view('master.master_intinerary.create_intinerary',compact('data','nota'));
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


            $check = $intinerary->same('mi_nota',$req->tour_code);

            $file = $req->file('image');
            if ($file != null) {

                $tour_code = str_replace('/', '-', $req->tour_code);
                $filename = 'itinerary/'.$tour_code.'.'.$file->getClientOriginalExtension();

                Storage::put($filename,file_get_contents($req->file('image')));
            }else{
                if ($check != null) {
                    $filename = $check->mi_image;
                }else{
                    return Response::json(['status'=>0,'message'=>'Please Put Your Photo...']);
                }
            }
            
            $head = array(
                    'mi_nota'       => $req->tour_code,
                    'mi_name'       => $req->intinerary,
                    'mi_image'      => $filename,
                    'category_id'   => $req->category,
                    'mi_highlight'  => $req->highlight,
                    'mi_by'         => $req->caption_by,
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

            $delete = $schedule->delete('ms_intinerary_id',$id);
            for ($i=0; $i < count($req->day); $i++) { 
                $sched = array(
                    'ms_intinerary_id'  => $id,
                    'ms_detail'         => $i+1,
                    'ms_caption'        => $req->caption_schedule[$i],
                    'ms_description'    => $req->description_schedule[$i],
                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now(),
                    'created_by'        => $name,
                    'updated_by'        => $name
                );

                $save_schedule = $schedule->create($sched);
            }

            for ($i=0; $i < count($req->detail_id); $i++) { 
                $det = array(
                    'md_intinerary_id'  => $id,
                    'md_start'          => Carbon::parse($req->start[$i])->format('Y-m-d'),
                    'md_end'            => Carbon::parse($req->end[$i])->format('Y-m-d'),
                    'md_adult_price'    => filter_var($req->adult_price[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_child_price'    => filter_var($req->child_price[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_infant_price'   => filter_var($req->infant_price[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_seat'           => $req->seat[$i],
                    'md_seat_remain'    => $req->seat[$i],
                    'md_term'           => $req->term[$i],
                    'updated_at'        => Carbon::now(),
                    'updated_by'        => $name
                );

                if ($req->detail_id[$i] != 0) {
                    $update_detail = $detail_intinerary->update($det,'md_intinerary_id',$id,'md_detail',$req->detail_id[$i]);
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



            return Response::json(['status'=>1]);
        });
    }
}
