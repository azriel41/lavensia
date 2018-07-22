<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\roles;
use Session;
use Auth;
use pdf;
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
        // $products = Products::all();
        // view()->share('products',$products);
        // if($request->has('download')){
        //     $pdf = PDF::loadView('htmltopdfview');
        //     return $pdf->download('htmltopdfview');
        // }

        
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
}
