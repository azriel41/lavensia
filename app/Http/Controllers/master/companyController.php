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
    public function master_bg_slider()
    {
      return view('master.master_company.master_bg_slider',compact('data'));
    }
    public function master_bg_artikel()
    {
      return view('master.master_company.master_bg_artikel',compact('data'));
    }
    public function master_bg_page()
    {
      return view('master.master_company.master_bg_page',compact('data'));
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

        return view('master.master_company.master_bg_slider');
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

        return view('master.master_company.master_bg_slider');
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

        return view('master.master_company.master_bg_slider');
    }




    public function sesudah_slider_1(Request $request)
    {
      // dd($request->all());
      $foto = '6';

      if ($request->file('image') == null) {
           $filename = $foto.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'company/company';
           $filename = $foto.'.jpg';
           Storage::put('company/company-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }

       
        $data = slider::findOrfail(6);
        $data->ms_img  = $filename;
        $data->update();

        return view('master.master_company.master_bg_slider');
    }

    public function sesudah_slider_2(Request $request)
    {
      $foto = '7';

      if ($request->file('image') == null) {
           $filename = $foto.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'company/company';
           $filename = $foto.'.jpg';
           Storage::put('company/company-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }

       
        $data = slider::findOrfail(7);
        $data->ms_img  = $filename;
        $data->update();

        return view('master.master_company.master_bg_slider');
    }

    public function sesudah_slider_3(Request $request)
    {
      $foto = '8';

      if ($request->file('image') == null) {
           $filename = $foto.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'company/company';
           $filename = $foto.'.jpg';
           Storage::put('company/company-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }

       
        $data = slider::findOrfail(8);
        $data->ms_img  = $filename;
        $data->update();

        return view('master.master_company.master_bg_slider');
    }





    public function bg_page(Request $request)
    {
       $foto = '4';

      if ($request->file('image') == null) {
           $filename = $foto.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'company/bg';
           $filename = $foto.'.jpg';
           Storage::put('company/bg-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }

       
        $data = slider::findOrfail(4);
        $data->ms_img  = $filename;
        $data->update();

        return view('master.master_company.master_bg_slider');
    }
    public function bg_article(Request $request)
    {
       $foto = '5';

      if ($request->file('image') == null) {
           $filename = $foto.'.jpg';
       }else{
           $image = $request->file('image');
           $upload = 'company/bg';
           $filename = $foto.'.jpg';
           Storage::put('company/bg-'.$filename,file_get_contents($request->file('image')->getRealPath()));
       }
        $data = slider::findOrfail(5);
        $data->ms_img  = $filename;
        $data->update();
        return redirect()->back();
    }

    

    public function contact_update(Request $request)
    {
      $data = DB::table('m_contact')->where('mc_id',1)->update([
          'mc_name'=>$request->mc_name,
          'mc_isi'=>$request->mc_isi,
          'mc_rek'=>$request->mc_rek,
      ]);
      return response()->json(['status'=>'sukses']);
    }
    public function contact_isi(Request $request)
    {
      $contact = DB::table('m_contact')->where('mc_id',1)->get();  
      return view('master.master_contact.create_contact',compact('contact'));
    }

}
