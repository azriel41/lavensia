<?php

namespace App\Http\Controllers\agent;

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
use Hash;
use Storage;
use Yajra\Datatables\Datatables;
class agent_agentController extends Controller
{
    public function agent()
    {
        $data = user::where('co_name',Auth::user()->co_name)->where('co_id','!=',Auth::user()->id)->get();
        
        if(Auth::user()->akses('approve master agent','mh_aktif')){
    	   return view('agent.index_agent',compact('data'));
        }else{
            return view('home');
        }
    }

    public function agent_datatable()
    {
        $data = user::where('co_name',Auth::user()->co_name)->where('co_id','!=',Auth::user()->id)->get();
        
        $data = collect($data);
        // return $data;

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

                            if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) {
                               return $a.$b.$c.$d.$e;
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
                            if ($data->role_id == 4) {
                                $role = 'Master Agent';
                            }else{
                                $role = 'Admin Agent';
                            }
                            return $role;
                        })
                       
                        ->rawColumns(['aksi','schedule','departure','privileges'])
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
        $data = DB::table('users')->where('co_name',Auth::user()->co_name)->get();
        // return $data;
        if(Auth::user()->akses('approve master agent','mh_aktif')){
            return view('agent.create_agent',compact('data'));
        }else{
            return redirect()->back();
        }
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
            ]);

        return redirect('agent/master_agent_agent');
    }
    public function agent_edit($id)
    {
        $data = DB::table('users')->where('id',$id)->first();
        json_encode($data);

        if(Auth::user()->akses('approve master agent','mh_aktif')){
            return view('agent.edit_agent',compact('data'));
        }else{
            return view('home');
        }
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
            ]);

       return view('agent.index_agent');
    }
    public function agent_delete($id)
    {
       $data = DB::table('users')->where('id',$id)->delete();
        
       return redirect()->back();
    }

}
