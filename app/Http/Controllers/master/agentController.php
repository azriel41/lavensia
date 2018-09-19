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
                                            <i class="material-icons">spellcheck</i>
                                            Approve
                                        </a>
                                    </li>';
                            $c = '<li>
                                        <a href="'.url('/master/master_agent').'/'.$data->id.'/edit'.'" class="waves-effect waves-block">
                                            <i class="material-icons">edit</i>
                                            Edit
                                        </a>
                                    </li>';
                            $d = '<li>
                                        <a href="'.url('/master/master_agent').'/'.$data->id.'/delete'.'" class="waves-effect waves-block">
                                            <i class="material-icons">delete</i>
                                            Delete
                                        </a>
                                    </li>';
                            $e = '</ul>
                            </div>';

                            if (Auth::user()->akses('master agent','mh_aktif')) {
                                if ($data->status == 'AKTIF') {
                                    return $a.$c.$d.$e;
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
                        })
                       
                        ->rawColumns(['aksi','schedule','departure'])
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
        return view('master.master_agent.create_agent',compact('role'));
    }
    public function agent_save(Request $request)
    {
        if ($request->file('image') == null) {
           $filename = auth::user()->id.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'agent/agent';
           $filename = auth::user()->id.'.jpg';
           Storage::put('agent/agent-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }

        $rules = [
                  "username" => "required|unique:users,username",
                  "co_name" => "required",
                  "co_phone" => "required",
                  "co_email" => "required",
                  "co_address" => "required",
                  "mg_name" => "required",
                  "name" => "required",
                  "phone" => "required",                
                  "email" => "required|unique:users,username", 
                  "address" => "required",
                  "password" => "required",  

            ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
          return redirect()->back()
          ->witherrors($validator)
          ->withinput();
        }


       $image = DB::table('users')->insert([
                'co_name'       =>$request->co_name,
                'co_phone'      =>$request->co_phone,
                'co_email'      =>$request->co_email,
                'co_address'    =>$request->co_address,
                'mg_name'       =>$request->mg_name,
                'mg_phone'      =>$request->mg_phone,
                'mg_email'      =>$request->mg_email,
                'name'          =>$request->name,
                'phone'         =>$request->phone,
                'email'         =>$request->email,
                'address'       =>$request->address,
                'image'         =>$filename,
                'password'      =>Hash::make($request->password),
                'username'      =>$request->username,
                'role_id'      =>$request->role_id,
            ]);

        return redirect('master/agent');
    }
    public function agent_edit($id)
    {
        $role = DB::table('role')->get();
        $data = DB::table('users')->where('id',$id)->first();
        json_encode($data);
        
        return view('master.master_agent.edit_agent',compact('data','role'));
    }
    public function agent_update(Request $request,$id)
    {

        if ($request->file('image') == null) {
           $filename = auth::user()->id.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'agent/agent';
           $filename = auth::user()->id.'.jpg';
           Storage::put('agent/agent-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }
       
       $image = DB::table('users')->where('id',$id)->update([
                'co_name'       =>$request->co_name,
                'co_phone'      =>$request->co_phone,
                'co_email'      =>$request->co_email,
                'co_address'    =>$request->co_address,
                'mg_name'       =>$request->mg_name,
                'mg_phone'      =>$request->mg_phone,
                'mg_email'      =>$request->mg_email,
                'name'          =>$request->name,
                'phone'         =>$request->phone,
                'email'         =>$request->email,
                'address'       =>$request->address,
                'image'         =>$filename,
                'password'      =>Hash::make($request->password),
                'username'      =>$request->username,
                'role_id'      =>$request->role_id,
            ]);

       return redirect('master/agent');
    }
    public function agent_delete($id)
    {
       $data = DB::table('users')->where('id',$id)->delete();
        
       return redirect()->back();
    }

}
