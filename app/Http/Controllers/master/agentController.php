<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TestRepo;
use App\category;
use App\schedule;
use App\User;
use App\additional;
use DB;
use carbon\Carbon;
use Auth;
use Response;
use File;
use Storage;
use Hash;
use Validator;
use Yajra\Datatables\Datatables;
class agentController extends Controller
{
    public function agent()
    {
        $data = user::all();
    	return view('master.master_agent.index_agent',compact('data'));
    }

    public function datatable_agent()
    {
        $data = user::all();
        
        $data = collect($data);

        return Datatables::of($data)
                        ->addColumn('aksi', function ($data) {
                             $a = '<div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="material-icons">settings</i>
                                    Manage <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" style="padding:0px">';
                            
                            $b = '<li class="bg-teal">
                                        <a onclick="approve(\''.$data->id.'\')" class="waves-effect waves-block" style="color:white">
                                            <i class="material-icons">visibility</i>
                                            Approve
                                        </a>
                                    </li>';
                            $b1 = '<li class="bg-teal">
                                        <a onclick="hide(\''.$data->id.'\',\''.'Y'.'\')" class="waves-effect waves-block" style="color:white">
                                            <i class="material-icons">visibility_off</i>
                                            Hide
                                        </a>
                                    </li>';

                            $b2 = '<li class="bg-teal">
                                        <a onclick="hide(\''.$data->id.'\',\''.'N'.'\')" class="waves-effect waves-block" style="color:white">
                                            <i class="material-icons">visibility</i>
                                            Unhide
                                        </a>
                                    </li>';
                            $c = '<li>
                                        <a href="'.url('/master/master_agent').'/'.$data->id.'/edit'.'" class="waves-effect waves-block">
                                            <i class="material-icons">edit</i>
                                            Edit
                                        </a>
                                    </li>';
                            $d = '<li>
                                        <a href="#" onclick="confirmation('.$data->id.')" class="waves-effect waves-block">
                                            <i class="material-icons">delete</i>
                                            Delete
                                        </a>
                                    </li>';
                            $e = '</ul>
                            </div>';

                            if (Auth::user()->akses('master agent','mh_aktif')) {
                                if ($data->status == 'AKTIF') {
                                    if ($data->hide == 'N') {
                                      return $a.$b1.$c.$d.$e;
                                    }elseif ($data->hide == 'Y'){
                                      return $a.$b2.$c.$d.$e;
                                    }
                                }else{

                                    return $a.$b.$c.$d.$e;
                                }
                            }else{
                               return $a.$c.$d.$e;
                            }
                        })
                        ->addColumn('departure', function ($data) {
                            return'<button onclick="departure(\''.$data->id.'\')" type="button" class="btn bg-pink waves-effect m-r-20" data-toggle="modal" data-target="#departure">
                                    <i class="material-icons">extensions</i>
                                   </button>';
                        })
                        ->addColumn('schedule', function ($data) {
                            return'<button onclick="schedule(\''.$data->id.'\')" type="button" class="btn bg-cyan waves-effect m-r-20" data-toggle="modal" data-target="#schedule">
                                    <i class="material-icons">extensions</i>
                                   </button>';
                        })
                        ->addColumn('privileges', function ($data) {
                            if ($data->role_id == 1) {
                                $role = 'Master oke-trip';
                            }elseif ($data->role_id == 2) {
                                $role = 'Supervisor oke-trip';
                            }elseif ($data->role_id == 3) {
                                $role = 'Admin oke-trip';
                            }
                            elseif ($data->role_id == 4) {
                                $role = 'Master Agent';
                            }elseif ($data->role_id == 5) {
                                $role = 'Admin Agent';
                            }
                            return $role;
                        })->addColumn('status', function ($data) {
                            if ($data->status == 'AKTIF') {
                              return '<label class="label label-success">Active</label>';
                            }else {
                              return '<label class="label label-warning">Inactive</label>';
                            }
                            return $role;
                        })->addColumn('hide', function ($data) {
                            if ($data->hide == 'Y') {
                              return '<label class="label label-success">Hidden</label>';
                            }else {
                              return '<label class="label label-warning">Unhidden</label>';
                            }
                            return $role;
                        })
                       
                        ->rawColumns(['aksi','schedule','departure','status','hide'])
                        ->addIndexColumn()
                        ->make(true);
    }
    public function agent_approve(Request $req)
    {
        $update = user::where('id', $req->id)
                             ->update(['status' => 'AKTIF']);

        return Response()->json(['status'=>1]);
    }
    public function agent_create()
    {
        $role = DB::table('role')->get();
        $city = DB::table('regencies')->get();
        return view('master.master_agent.create_agent',compact('role','city'));
    }
    public function agent_save(Request $request)
    {

       $data_master = DB::table('users')->where('role_id',1)->first();

       $data_image = DB::table('users')->max('id');

       if ($data_image == null) {
            $data_image = 1;
       }else{
            $data_image += 1;
       }

       if ($request->role_id == 1 || $request->role_id == 2 || $request->role_id == 3) {
           $filename = $data_master->image;
       }else{
           if ($request->file('image') == null) {
               $filename = $data_image.'.jpg';
           }else{
               $image = $request->file('image');
               $upload = 'agent/agent';
               $filename = $data_image.'.jpg';
               Storage::put('agent/agent-'.$filename,file_get_contents($request->file('image')->getRealPath()));
           }
       }

        $rules = [
                  "username" => "required|unique:users,username",
                  "co_name" => "required",
                  "city" => "required",
                  "co_phone" => "required",
                  "co_email" => "required",
                  "co_address" => "required",
                  "mg_name" => "required",
                  "name" => "required",
                  "phone" => "required",                
                  "password" => "required",  
                  "role_id" => "required",  

            ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
          return redirect()->back()
          ->witherrors($validator)
          ->withinput();
        }


        $image = DB::table('users')->insert([
                'name'          =>$request->name,
                'phone'         =>$request->phone,
                'jabatan'       =>$request->jabatan,
                'password'      =>Hash::make($request->password),
                'username'      =>$request->username,
                'role_id'       =>$request->role_id,
                'city'          =>$request->city,
                'co_name'       =>$request->co_name,
                'co_phone'      =>$request->co_phone,
                'co_email'      =>$request->co_email,
                'co_address'    =>$request->co_address,
                'image'         =>$filename,
                'mg_name'       =>$request->mg_name,
                'mg_phone'      =>$request->mg_phone,
                'mg_email'      =>$request->mg_email,
            ]);

        return redirect('master/agent');
    }
    public function agent_edit($id)
    {
        $role = DB::table('role')->get();
        $data = DB::table('users')->where('id',$id)->first();
        $city = DB::table('regencies')->get();
        return view('master.master_agent.edit_agent',compact('data','role','city'));
    }
    public function agent_update(Request $req)
    {
      return DB::transaction(function() use ($req) {  

        $data_master = DB::table('users')->where('id',$req->id)->first();
        if (isset($req->image)) {
          if ($req->role_id == 4 || $req->role_id == 5 ) {
            $filename = $data_master->image;
          }else{
            if ($req->file('image') == null) {
              $filename = $req->id.'.jpg';
            }else{
              $image = $req->file('image');
              $upload = 'agent/agent';
              $filename = $req->id.'.jpg';
              Storage::put('agent/agent-'.$filename,file_get_contents($req->file('image')->getRealPath()));
            }
          }
        }else{
          $filename = $data_master->image;
        }
          

        $child = DB::table('users')->where('co_name',$data_master->co_name)
                                  ->update([
                                    'co_name'       =>$req->co_name,
                                    'co_phone'      =>$req->co_phone,
                                    'co_email'      =>$req->co_email,
                                    'co_address'    =>$req->co_address,
                                    'city'          =>$req->city,
                                    'mg_name'       =>$req->mg_name,
                                    'mg_phone'      =>$req->mg_phone,
                                    'mg_email'      =>$req->mg_email,
                                    'image'         =>$filename,
                                  ]);
        if (Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3) {

          if ($req->password == null) {
            $image = DB::table('users')->where('id',$req->id)->update([
              'co_name'       =>$req->co_name,
              'co_phone'      =>$req->co_phone,
              'co_email'      =>$req->co_email,
              'co_address'    =>$req->co_address,
              'city'          =>$req->city,
              'mg_name'       =>$req->mg_name,
              'mg_phone'      =>$req->mg_phone,
              'mg_email'      =>$req->mg_email,
              'name'          =>$req->name,
              'phone'         =>$req->phone,
              'jabatan'       =>$req->jabatan,
              'image'         =>$filename,
              'username'      =>$req->username,
            ]);
          }else{
            $image = DB::table('users')->where('id',$req->id)->update([
              'co_name'       =>$req->co_name,
              'co_phone'      =>$req->co_phone,
              'co_email'      =>$req->co_email,
              'co_address'    =>$req->co_address,
              'city'          =>$req->city,
              'mg_name'       =>$req->mg_name,
              'mg_phone'      =>$req->mg_phone,
              'mg_email'      =>$req->mg_email,
              'name'          =>$req->name,
              'phone'         =>$req->phone,
              'jabatan'       =>$req->jabatan,
              'image'         =>$filename,
              'password'      =>Hash::make($req->password),
              'username'      =>$req->username,
            ]);
          }
            

        }else{
          $image = DB::table('users')->where('id',$req->id)->update([
            'name'          =>$req->name,
            'phone'         =>$req->phone,
            'jabatan'       =>$req->jabatan,
            'image'         =>$filename,
            'password'      =>Hash::make($req->password),
            'username'      =>$req->username,
          ]);
        }
          
        return response()->json(['status'=>'sukses']);
      });
    }

    public function agent_delete($id)
    {
       $data = DB::table('users')->where('id',$id)->delete();
        
       if ($data == true) {
         return response()->json(['status'=>'sukses']);
       }else{
         return response()->json(['status'=>'Error']); 
       }
    }

    public function hide_master_agen(Request $req)
    {
      $child = DB::table('users')->where('id',$req->id)
                                  ->update([
                                    'hide'  =>$req->status,
                                  ]);

      return response()->json(['pesan'=>'Success updating data']); 
    }

}
