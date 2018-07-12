<?php

namespace App\Http\Controllers\human_resource;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use auth;
use App\model\human_resource\siswa;

class siswaController extends Controller
{
    public function siswa()
    {
        $data = DB::Table('users')->get();
        return view('human_resource.siswa.index',compact('data'));
    }
    public function complete_data()
    {   
        $id   = auth::user()->id;
        $data = DB::table('users')->where('id',$id)->first();
        json_encode($data);
        return view('human_resource.siswa.complete_data',compact('data'));
    }
    public function save_siswa(Request $request)
    {
       $data = siswa::find($request->id);
       $data->name=$request->hr_name;
       $data->birthday=date('Y-m-d',strtotime($request->hr_birthday));
       $data->phone=$request->hr_phone;
       $data->email=$request->hr_email;
       $data->address=$request->hr_address;
       $data->studies=$request->hr_studies;
       $data->education=$request->hr_educ;
       $data->class=null;
       $data->save();

       return response()->json(['status'=>'sukses']);
    }
    
}
