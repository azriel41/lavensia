<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TestRepo;
use DB;
use carbon\Carbon;
use Auth;
use Response;
use File;
use App\intinerary;
use Storage;
use Yajra\Datatables\Datatables;
use App\all_variable;
use App\User;
class intinerary_controller extends Controller
{
    protected $all_variable;

	public function __construct()
	{
	   $this->all_variable = new all_variable();
	}
    public function index()
    {
        $data = $this->all_variable->intinerary()->all();
    	return view('master.master_intinerary.index_intinerary',compact('data'));
    }

    public function datatable_intinerary()
    {
        $data = $this->all_variable->intinerary()->all();
           
        
        $data = collect($data);
        return Datatables::of($data)
                        ->addColumn('aksi', function ($data) {
                            $c1 = '';
                            $c = '';
                            $b = '<li class="bg-default">
                                    <a class=" waves-effect waves-block">
                                        There Is Nothing
                                    </a>
                                  </li>';

                            $a = '<div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="material-icons">settings</i>
                                    Manage <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" style="padding:0px">';

                                    if (Auth::user()->akses('edit itinerary','mh_aktif')) {
                                        $b = '<li class="bg-orange">
                                                    <a href="'.url('/master/master_intinerary/edit').'/'.$data->mi_id.'" class=" waves-effect waves-block" style="color:white">
                                                        <i class="material-icons">edit</i>
                                                        Edit
                                                    </a>
                                                </li>';
                                    }
                                    if (Auth::user()->akses('hapus itinerary','mh_aktif')) {
                                        $c = '<li class="bg-red">
                                            <a onclick="deleting(\''.$data->mi_id.'\')" class="waves-effect waves-block" style="color:white">
                                                <i class="material-icons">delete</i>
                                                Delete
                                            </a>
                                        </li>';
                                    }


                                    if ($data->mi_status != 'ACTIVE') {
                                        if (Auth::user()->akses('approve itinerary','mh_aktif')) {
                                            $c1 = '<li class="bg-cyan">
                                                <a onclick="approve(\''.$data->mi_id.'\')" class="waves-effect waves-block" style="color:white">
                                                    <i class="material-icons">check</i>
                                                    Approve
                                                </a>
                                            </li>';
                                        }
                                    }else{
                                        $c1 = '<li class="bg-cyan">
                                                <a onclick="approve(\''.$data->mi_id.'\')" class="waves-effect waves-block" style="color:white">
                                                    <i class="material-icons">check</i>
                                                    Edit Netto
                                                </a>
                                            </li>';
                                    }
                                $d = '</ul>
                            </div>';

                            return $a.$b.$c.$c1.$d;
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
                            $tes = [];
                            // if (isset($data->destination)) {

                                for ($i=0; $i < count($data->destination); $i++) { 
                                    $tes[$i]= $data->destination[$i]->category->mc_name;
                                }   
                               return $tes = implode(',', $tes);
                            // }
                        })
                        ->addColumn('status', function ($data) {
                            if ($data->mi_status == "ACTIVE") {
                                return '<label class="label label-primary" style="font-size: 12px !important;">ACTIVE</label>';
                            }else{
                                return '<label class="label label-danger" style="font-size: 12px !important;">NOT ACTIVE</label>';
                            }
                        })
                        ->rawColumns(['aksi','category','schedule','departure','status'])
                        ->addIndexColumn()
                        ->make(true);
    }

    public function create()
    {
        $bulan = Carbon::now()->format('m');
        $tahun = Carbon::now()->format('y');
        $tanggal = Carbon::now()->format('d');
    	$id = $this->all_variable->intinerary()->max('mi_id');
        $index = str_pad($id, 3, '0', STR_PAD_LEFT);
        $nota = 'TR' .$tahun.$bulan.$tanggal.'/'. $index;  
        $additional = $this->all_variable->additional()->all();
        $category =  $this->all_variable->category()->all();
    	return view('master.master_intinerary.create_intinerary',compact('category','nota','additional'));
    }

    public function edit($id)
    {
        $data =  $this->all_variable->intinerary()->same('mi_id',$id);
        $additional = $this->all_variable->additional()->all();
        $category =  $this->all_variable->category()->all();
        $user =  User::select('co_name')->distinct()->get();
        return view('master.master_intinerary.edit_intinerary',compact('category','data','additional','user'));
    }


    public function save(Request $req)
    {
        // dd($req->all());


        return DB::transaction(function() use ($req) {  
            $name                       = Auth::user()->name;
            $intinerary                 = $this->all_variable->intinerary();
            $schedule                   = $this->all_variable->schedule();
            $detail_intinerary          = $this->all_variable->detail_intinerary();
            $m_additional_intinerary    = $this->all_variable->m_additional_intinerary();
            $flight_detail              = $this->all_variable->flight_detail();
            $destination                = $this->all_variable->destination();
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
                    'mi_name'       => strtoupper($req->intinerary),
                    'mi_image'      => $photo,
                    'mi_pdf'        => $pdf,
                    'mi_term'       => $req->term,
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
                $head['mi_book_by'] = $req->book_by;
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
                    'ms_bld'            => strtoupper($req->BLD[$i]),
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
                    'md_seat'           => $req->seat[$i],
                    'md_seat_remain'    => $req->seat[$i]-1,
                    'md_dp'             => filter_var($req->minimal_dp[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_agent_com'      => filter_var($req->agent_com[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_tips'           => filter_var($req->tips[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_visa'           => filter_var($req->visa[$i],FILTER_SANITIZE_NUMBER_INT),
                    'md_tax'            => filter_var($req->apt_tax[$i],FILTER_SANITIZE_NUMBER_INT),
                    'updated_at'        => Carbon::now(),
                    'updated_by'        => $name
                );


                if ($req->detail_id[$i] != '0') {

                    $cari_seat = $detail_intinerary->show_detail_one('md_intinerary_id',$id,'md_detail',$req->detail_id[$i]);
                    $remain    = $req->seat[$i] - $cari_seat->md_seat;
                    $det['md_seat_remain']      = $cari_seat->md_seat_remain + $remain;
                    if ($cari_seat->md_seat_remain > $req->seat[$i]) {
                        return Response::json(['status'=>0,'message'=>'Seat Telah Terpakai Sebagian']);
                    }
                    $update_detail = $detail_intinerary->update_detail($det,'md_intinerary_id',$id,'md_detail',$req->detail_id[$i]);
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

            $delete = $flight_detail->delete('fd_intinerary_id',$id);
            for ($i=0; $i < count($req->fd_nomor); $i++) { 
                $fl = array(
                    'fd_intinerary_id'  => $id,
                    'fd_detail'         => $i+1,
                    'fd_nomor'          => strtoupper($req->fd_nomor[$i]),
                    'fd_tanggal'        => Carbon::parse($req->fd_tanggal[$i])->format('Y-m-d'),
                    'fd_route'          => strtoupper($req->fd_route[$i]),
                    'fd_time'           => $req->fd_time[$i],
                );
                // dd($fl);
                $save_schedule = $flight_detail->create($fl);
            }

            $delete = $destination->delete('d_id',$id);
            for ($i=0; $i < count($req->category); $i++) { 
                $fl = array(
                    'd_id'              => $id,
                    'd_detail'          => $i+1,
                    'd_category_id'     => $req->category[$i],
                );
                // dd($fl);
                $destination->create($fl);
            }

            // dd($detail_intinerary->show('md_intinerary_id',$id)->toArray());

            return Response::json(['status'=>1]);
        });
    }

    public function schedule(Request $req)
    {
        $data = $this->all_variable->intinerary()->same('mi_id',$req->mc_id);


        return view('master.master_intinerary.table_schedule',compact('data'));
    }

    public function departure(Request $req)
    {
        $data = $this->all_variable->intinerary()->same('mi_id',$req->mc_id);

        return view('master.master_intinerary.table_departure',compact('data'));

    }

    public function ganti_nama(Request $req)
    {
        $data = $this->all_variable->intinerary()->same('mi_id',$req->mc_id);
        return Response::json(['data'=>$data->mi_name]);
    }

    public function delete(Request $req)
    {
        return DB::transaction(function() use ($req) {  
            $detail_intinerary   =  $this->all_variable->detail_intinerary();
            $all_detail = $detail_intinerary->show('md_intinerary_id',$req->id)->toArray();
            $temp = [];
            for ($a=0; $a < count($all_detail); $a++) { 
                if ($all_detail[$a]['md_seat'] != ($all_detail[$a]['md_seat_remain']+1)) {
                    array_push($temp, 0);
                }else{
                    array_push($temp, 1);
                }
            }
            if (in_array(0, $temp)) {
                return Response::json(['status'=>0,'message'=>'Data Tidak Bisa Dihapus Karena Terdapat Seat Yang Berkurang']);
            }else{
                $this->all_variable->intinerary()->delete('mi_id',$req->id);
                return Response::json(['status'=>1]);
            }
        });
    }

    public function intinerary_detail(Request $req)
    {
        $detail_intinerary = $this->all_variable->detail_intinerary()->cari('md_id',$req->id);
        $tl = $this->all_variable->tour_leader()->all();
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
        
        return view('master.master_intinerary.detail_intinerary',compact('passenger','id','room','bed','person','booking','detail_intinerary','tl'));

    }
    public function save_detail(Request $req)
    {
        $check = DB::table('m_intinerary')->join('m_detail_intinerary','md_intinerary_id','mi_id')->where('md_id',$req->id)->first();
        // return json_encode($check);

        DB::beginTransaction();
        $fc = $req->file('fc');
        $tt = $req->file('tt');
        $image = $req->file('image');

        if ($fc != null) {

            $tour_code = str_replace('/', '-', $req->tour_code);
            $fc1 = 'detail_itin/FINAL_'.$req->id.'.'.$fc->getClientOriginalExtension();

            Storage::put($fc1,file_get_contents($fc));
        }else{
            $check1 = $check->md_tata_tertib;
            if ($check1 != null) {
                $fc1 = $check->md_final;
            }else{
                $fc1 = null;
            }
        }

        if ($tt != null) {

            $tt1 = 'detail_itin/TATA_TERTIB_'.$req->id.'.'.$tt->getClientOriginalExtension();

            Storage::put($tt1,file_get_contents($tt));
        }else{
            $check1 = $check->md_tata_tertib;
            if ($check1 != null) {
                $tt1 = $check->md_tata_tertib;
            }else{
                $tt1 = null;
            }
        }
        if ($image != null) {

            $image1 = 'detail_itin/Detail_flayer_'.$check->mi_id.'.jpg';

            Storage::put($image1,file_get_contents($image));
        }else{
                $check1 = $check->md_flayer;
            if ($check1 != null) {
                $image1 = $check->md_flayer;
            }else{
                $image1 = null;
            }
        }

        if ($req->tl != null) {
            $tl = $req->tl;
        }else{
            $tl = null;
        }
        $update = DB::table('m_detail_intinerary')->where('md_id',$req->id)->update([
                    'md_tata_tertib'=>$tt1,
                    'md_final'=>$fc1,
                    'md_flayer'=>$image1,
                    'md_tour_leader'=>$tl,
                    'md_tip'=>filter_var($req->tip,FILTER_SANITIZE_NUMBER_INT),

        ]);
        // $update   =  $this->all_variable->detail_intinerary()->update($save,'md_id',$req->id);
        if ($update != 1) {
            return Response::json(['status'=>0,'message'=>'Data Gagal Disimpan']);
            DB::rollBack();
        }

        DB::commit();
        return Response::json(['status'=>1,'message'=>'Saving Success']);
    }

    public function approve(Request $req)
    {
        $key = array_keys($req->all());
        $value = $req->all();                
        if (Auth::user()->akses('approve itinerary','mh_aktif')) {
            for ($i=0; $i < count($key); $i++) { 
                $data[$key[$i]] = filter_var($value[$key[$i]],FILTER_SANITIZE_NUMBER_INT);
                $data['mi_status'] = 'ACTIVE';
            }
            $this->all_variable->intinerary()->update($data,'mi_id',$req->mi_id);
            return Response::json(['status'=>1,'message'=>'Update Success']);
        }
    }
    public function master_leader()
    {
        return view('master.master_leader.master_leader');
    }

    public function create_leader()
    {
        return view('master.master_leader.tambah');
    }

    public function save_leader(Request $req)
    {
        // dd($req->all());
        DB::beginTransaction();
        try{
            $id = $this->all_variable->tour_leader()->max('tl_id');

            $file = $req->file('image');
            if ($file != null) {

                $photo = 'tour_leader/PHOTO_'.$id.'.'.$file->getClientOriginalExtension();

                Storage::put($photo,file_get_contents($req->file('image')));
            }else{
                return Response::json(['status'=>0,'message'=>'Please Put Your Photo...']);
            }

            $save = array(
                        'tl_id' => $id,
                        'tl_name' => $req->name,
                        'tl_alamat' => $req->alamat,
                        'tl_phone' => $req->phone,
                        'tl_passport' => $req->passport,
                        'tl_exp_date' => carbon::parse($req->exp_date)->format('Y-m-d'),
                        'tl_issuing' => $req->issued,
                        'tl_gender' => $req->gender,
                        'tl_birth_date' => carbon::parse($req->date_birth)->format('Y-m-d'),
                        'tl_birth_place' => $req->place_birth,
                        'tl_image' => $photo,
                        'created_by'=>Auth::user()->name,
                        'updated_by'=>Auth::user()->name,
                    );
            $this->all_variable->tour_leader()->create($save);
            DB::commit();
            return Response::json(['status'=>1]);
        }catch(Exception $error){
            DB::rollBack();
            dd($error);
        }
    }
    public function delete_leader(Request $req)
    {
        // dd($req->all());
        return DB::transaction(function() use ($req) {  
            DB::table('d_tour_leader')->where('tl_id',$req->id)->delete();    
            return Response::json(['status'=>1]);
        });

    }

    public function datatable_leader()
    {
        $data = $this->all_variable->tour_leader()->all();
           
        
        $data = collect($data);

        return Datatables::of($data)
                        ->addColumn('aksi', function ($data) {
                            $c1 = '';
                            $a = '<div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="material-icons">settings</i>
                                    Manage <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" style="padding:0px">';
                                    $b = '<li>
                                        <a onclick="look(\''.$data->tl_id.'\')" class=" waves-effect waves-block" >
                                            <i class="material-icons">extensions</i>
                                            Detail
                                        </a>
                                    </li>';
                                    $c = '<li >
                                        <a onclick="editing(\''.$data->tl_id.'\')" class="waves-effect waves-block" >
                                            <i class="material-icons">edit</i>
                                            Edit
                                        </a>
                                    </li>';
                                    $d = '<li >
                                        <a onclick="deleting(\''.$data->tl_id.'\')" class="waves-effect waves-block" >
                                            <i class="material-icons">delete</i>
                                            Delete
                                        </a>
                                    </li>';

                                $e = '</ul>
                            </div>';

                            return $a.$b.$c.$d.$e;
                        })
                        ->rawColumns(['aksi'])
                        ->addIndexColumn()
                        ->make(true);
    }

    public function edit_leader(Request $req)
    {
        $data = $this->all_variable->tour_leader()->cari('tl_id',$req->id);
        return view('master.master_leader.edit',compact('data'));
    }
    public function update_leader(Request $req)
    {
        DB::beginTransaction();
        try{
            $cari = $this->all_variable->tour_leader()->cari('tl_id',$req->id);
            $file = $req->file('image');
            if ($file != null) {
                $photo = 'tour_leader/PHOTO_'.$req->id.'.'.$file->getClientOriginalExtension();
                Storage::put($photo,file_get_contents($req->file('image')));
            }else{
                $photo = $cari->tl_image;
            }

            $save = array(
                        'tl_name' => $req->name,
                        'tl_alamat' => $req->alamat,
                        'tl_phone' => $req->phone,
                        'tl_passport' => $req->passport,
                        'tl_exp_date' => carbon::parse($req->exp_date)->format('Y-m-d'),
                        'tl_issuing' => $req->issued,
                        'tl_gender' => $req->gender,
                        'tl_birth_date' => carbon::parse($req->date_birth)->format('Y-m-d'),
                        'tl_birth_place' => $req->place_birth,
                        'tl_image' => $photo,
                        'created_by'=>Auth::user()->name,
                        'updated_by'=>Auth::user()->name,
                    );

            $this->all_variable->tour_leader()->update($save,'tl_id',$req->id);
            DB::commit();
            return Response::json(['status'=>1]);
        }catch(Exception $error){
            DB::rollBack();
            dd($error);
        }
    }
    public function cari_intinerary(Request $req)
    {
        // return $id;
        $cat = $req->id;
        $bulan = $req->month;

        if ($cat != null) {
            $category = "AND d_category_id = $cat"; 
        }else{
            $category = '';
        }
        // return $category;

        if ($bulan != null) {
            $month = "AND MONTH(md_start) = $bulan ";
        }else{
            $month = '';
        }

        $intinerary = DB::select("SELECT * FROM m_intinerary
             left join m_destination on m_destination.d_id =  m_intinerary.mi_id
             where mi_status = 'ACTIVE' $category $month ");

        // $intinerary = DB::table('m_intinerary')->join('m_destination','m_intinerary.mi_id','=','m_destination.d_detail')->where('mi_status','ACTIVE')->where('d_category_id','like','%'.$req->id.'%')->whereMonth('md_start',$req->)->get();


        return view('itinerary.itinerary',compact('intinerary'));

    }

    public function edit_netto(Request $req)
    {
        $data = $this->all_variable->intinerary()->cari('mi_id',$req->id);

        return Response::json(['data'=>$data]);
    }

    public function rubah_seat(Request $req)
    {
        DB::beginTransaction();
        try{
            $data = DB::table('m_detail_intinerary')->where('md_nota',$req->md_nota)->update(['md_seat_remain'=>$req->md_seat_remain]);
            DB::commit();
            return Response::json(['status'=>1]);
        }catch(Exception $error){
            DB::rollBack();
            dd($error);
        }
    }
}
