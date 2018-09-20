<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\company;
use DB;
use auth;
use Carbon\carbon;

class companyController extends Controller
{
    public function index($value='')
    {
      $data = company::all(); 
    	return view('master.master_company.index_company',compact('data'));
    }
    public function create()
    {
      $regencies = DB::table('regencies')->get();  
    	return view('master.master_company.create_company',compact('regencies'));
    }
    public function save(Request $request)
    {
    	$price = str_replace( '.', '',$request->ad_price);

     	$data = new company;
      $data->mc_name  = $request->ad_name;
      $data->save();

      return response()->json(['status'=>'sukses']);
    }
    public function update(Request $request)
    {

     	$data = company::find($request->ad_id);
      $data->mc_name  = $request->ad_name;
      $data->save();

      return response()->json(['status'=>'sukses']);
    }
    public function edit(Request $request,$id)
    {
    	$data = company::find($id);	
    	return view('master.master_company.edit_company',compact('data'));
    }
    public function delete(Request $request)
    {
    	$data = company::find($request->id)->delete();	
        
        return response()->json(['status'=>'sukses']);

    }
}
