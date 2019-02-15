<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\roles;
use Session;
use Auth;
use Storage;
use DB;
use App\d_booking;
use carbon\carbon;
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
          
        $today = d_booking::where(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'),carbon::now()->format('Y-m-d'))->get()->count();

        $yesterday = d_booking::where(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'),carbon::now()->subDays(1)->format('Y-m-d'))->get()->count();

        $weekAgo = d_booking::where(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'),'>=',carbon::now()->subDays(7)->format('Y-m-d'))
                              ->where(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'),'<=',carbon::now()->format('Y-m-d'))
                              ->get()->count();

        $bestTravel = d_booking::selectRaw('count(db_intinerary_id) as best,db_intinerary_id')->groupBy('db_intinerary_id')->orderBy('best','DESC')->limit(5)->get();

        $bestAgen = d_booking::selectRaw('count(db_users) as best,db_users')->groupBy('db_users')->orderBy('best','DESC')->limit(5)->get();

        return view('home',compact('weekAgo','today','yesterday','bestTravel','bestAgen'));
        
    }
    public function profile()
    {   
        if (Auth::user()->role_id == 2 or Auth::user()->role_id == 3 or Auth::user()->role_id == 5) {
            if (Auth::user()->role_id == 2 or Auth::user()->role_id == 3) {
                $master = DB::table('users')->where('co_name',Auth::user()->co_name)->where('role_id',1)->first();
            }elseif (Auth::user()->role_id == 5 ){
                $master = DB::table('users')->where('co_name',Auth::user()->co_name)->where('role_id',4)->first();
            }

            $city  = DB::table('regencies')->where('id',$master->city)->first();
        }else{
            $city  = DB::table('regencies')->where('id',Auth::user()->city)->first();
        }

        if ($city == null) {
            $city = 'Not FIlled';
        }else{
            $city = $city->name;
        }

        return view('auth.profile',compact('city'));
    }
    
    public function edit_profile(Request $request)
    {
        $city  = DB::table('regencies')->get();
        return view('auth.edit_profile',compact('city'));
    }
    public function save_profile(Request $request)
    {
        $filename = auth::user()->image;
        if (Auth::user()->role_id == '4' or Auth::user()->role_id == '1' or Auth::user()->role_id == '2') {

            if ($request->file('image') == null) {
               $filename = auth::user()->image;
            }else{
               $image = $request->file('image');
               $upload = 'agent/agent';
               $filename = auth::user()->id.'.jpg';
               Storage::put('agent/agent-'.$filename,file_get_contents($request->file('image')->getRealPath()));
            }

            $child = DB::table('users')->where('co_name',Auth::user()->co_name)
                                      ->update([
                                        'co_name'       =>$request->co_name,
                                        'co_phone'      =>$request->co_phone,
                                        'co_email'      =>$request->co_email,
                                        'city'          =>$request->city,
                                        'co_address'    =>$request->co_address,
                                        'mg_name'       =>$request->mg_name,
                                        'mg_phone'      =>$request->mg_phone,
                                        'mg_email'      =>$request->mg_email,
                                      ]); 

        }

        $save = DB::table('users')->where('id',Auth::user()->id)
                                      ->update([
                                        'name'          =>$request->name,
                                        'phone'         =>$request->phone,
                                        'email'         =>$request->email,
                                        'address'       =>$request->address,
                                        'image'         =>$filename,
                                      ]); 

            
       
       $image = DB::table('users')->where('id',auth::user()->id)->first();

       return redirect('profile');


    }

}
