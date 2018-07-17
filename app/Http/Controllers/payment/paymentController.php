<?php

namespace App\Http\Controllers\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use auth;
use App\payment;

class paymentController extends Controller
{
     public function index()
    {
    	$data = payment::all();	
    	return view('operational.payment.index_payment',compact('data'));
    }
    public function create()
    {
    	return view('operational.payment.operational_payment.create_payment');
    }
    public function save(Request $request)
    {
    	$price = str_replace( '.', '',$request->ad_price);

     	$data = new payment;
      	$data->mc_name  = $request->ad_name;
      	$data->save();

      return response()->json(['status'=>'sukses']);
    }
    public function update(Request $request)
    {

     	$data = payment::find($request->ad_id);
      	$data->mc_name  = $request->ad_name;
      	$data->save();

      return response()->json(['status'=>'sukses']);
    }
    public function edit(Request $request,$id)
    {
    	$data = payment::find($id);	
    	return view('operational.payment.operational_payment.edit_payment',compact('data'));
    }
    public function delete(Request $request)
    {
    	$data = payment::find($request->id)->delete();	
        
        return response()->json(['status'=>'sukses']);

    }
    
}
