<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
use DB;
use auth;
use Carbon\carbon;

class categoryController extends Controller
{
    public function index($value='')
    {
    	$data = category::all();	
    	return view('master.master_category.index_category',compact('data'));
    }
    public function create()
    {
    	return view('master.master_category.create_category');
    }
    public function save(Request $request)
    {
    	$price = str_replace( '.', '',$request->ad_price);

     	$data = new category;
      $data->mc_name  = $request->ad_name;
      $data->save();

      return response()->json(['status'=>'sukses']);
    }
    public function update(Request $request)
    {

     	$data = category::find($request->ad_id);
      $data->mc_name  = $request->ad_name;
      $data->save();

      return response()->json(['status'=>'sukses']);
    }
    public function edit(Request $request,$id)
    {
    	$data = category::find($id);	
    	return view('master.master_category.edit_category',compact('data'));
    }
    public function delete(Request $request)
    {
    	$data = category::find($request->id)->delete();	
        
        return response()->json(['status'=>'sukses']);

    }
}
