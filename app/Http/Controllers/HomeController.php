<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\mail\sendMail;

class HomeController extends Controller
{
    use Queueable, SerializesModels;
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

    public function test()
    {
        Mail::send('coba',['name' => 'ASEP','email' => 'GMAIL','password' => '123123','date'=>date("Y-m-d H:i:s")],function($message){
            $message->to('denyprasetyo41@gmail.com')->Subject('DATA PENDAFTAR');
            $message->from('system@gmail.com','system');
        });
        $name = 'Ari Panggalu Raharja';
        $email = 'aripangsraharja@gmail.com';
        $password = '123123';
        $date=date("Y-m-d H:i:s");
        return view('coba',compact('name','email','password','date'));
    }
}
