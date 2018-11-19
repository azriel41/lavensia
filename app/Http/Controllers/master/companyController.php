<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\slider;
use DB;
use auth;
use Carbon\carbon;
use Storage;
class companyController extends Controller
{
    public function index($value='')
    {
    	return view('master.master_company.index_company',compact('data'));
    }

    public function slider_1(Request $request)
    {
      $foto = '1';

      

      if ($request->file('image') == null) {
           $filename = $foto.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'company/company';
           $filename = $foto.'.jpg';
           Storage::put('company/company-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }

       
        $data = slider::findOrfail(1);
        $data->ms_img  = $filename;
        $data->update();

        return view('master.master_company.index_company');
    }

    public function slider_2(Request $request)
    {
      $foto = '2';

      if ($request->file('image') == null) {
           $filename = $foto.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'company/company';
           $filename = $foto.'.jpg';
           Storage::put('company/company-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }

       
        $data = slider::findOrfail(2);
        $data->ms_img  = $filename;
        $data->update();

        return view('master.master_company.index_company');
    }

    public function slider_3(Request $request)
    {
      $foto = '3';

      if ($request->file('image') == null) {
           $filename = $foto.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'company/company';
           $filename = $foto.'.jpg';
           Storage::put('company/company-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }

       
        $data = slider::findOrfail(3);
        $data->ms_img  = $filename;
        $data->update();

        return view('master.master_company.index_company');
    }

}
