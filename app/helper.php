<?php


function agent()
{   if (Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3) {
        return $agent = DB::table('users')->whereNotIn('role_id',[1,2,3])->get();
    }else{
        return $agent = DB::table('users')->where('co_name',Auth::user()->co_name)->get();
    }
}

function booking()
{
    if (Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3) {
        return $booking = DB::table('d_booking')->get();
    }else{
        return $booking = DB::table('d_booking')->where('db_users',Auth::user()->id)->get();
    }
}

function itinerary()
{
    return $booking = DB::table('m_intinerary')->get();
}


