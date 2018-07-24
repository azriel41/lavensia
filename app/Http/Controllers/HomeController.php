<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\roles;
use Session;
use Auth;
use Storage;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        
        return view('home');
        
    }
    public function profile()
    {
        return view('auth.profile');
    }
    public function edit_profile(Request $request)
    {
        return view('auth.edit_profile');
    }
    public function save_profile(Request $request)
    {

       $image = $request->file('image');
       $upload = 'agent/agent';
       $filename = auth::user()->id.'.jpg';
       Storage::put('agent/agent-'.$filename,file_get_contents($request->file('image')->getRealPath()));

       $image = DB::table('users')->where('id',auth::user()->id)->update([
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
            ]);

       return redirect('profile');


    }
}
