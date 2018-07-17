<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\additional;
use DB;
use auth;
use Carbon\carbon;

class additionalController extends Controller
{
    public function index($value='')
    {
    	$data = additional::all();	
    	return view('master.master_additional.index_additional',compact('data'));
    }
    public function create()
    {
    	return view('master.master_additional.create_additional');
    }
    public function save(Request $request)
    {
    	$price = str_replace( '.', '',$request->ad_price);

     	$data = new additional;
     	$data->ma_name  = $request->ad_name;
     	$data->ma_price = $price;
     	$data->ma_desc  = $request->ad_desc;
     	$data->save();

      return response()->json(['status'=>'sukses']);
    }
    public function update(Request $request)
    {
    	$price = str_replace( '.', '',$request->ad_price);

     	$data = additional::find($request->ad_id);
     	$data->ma_name  = $request->ad_name;
     	$data->ma_price = $price;
     	$data->ma_desc  = $request->ad_desc;
     	$data->save();

      return response()->json(['status'=>'sukses']);
    }
    public function edit(Request $request,$id)
    {
    	$data = additional::find($id);	
    	return view('master.master_additional.edit_additional',compact('data'));
    }
    public function delete(Request $request)
    {
    	$data = additional::find($request->id)->delete();	
        
      return response()->json(['status'=>'sukses']);

    }
}
