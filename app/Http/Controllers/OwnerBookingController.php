<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Homestay;
use App\Booking;

class OwnerBookingController extends Controller
{
    public function booking(){
        $data_booking = \App\Booking::all();
        return view('Owner.admin.booking',['data_booking'=>$data_booking]); 
    }

    public function view($id){
        $data_booking = \App\Booking::find($id);
        return view('Owner.booking.detail',['data_booking'=> $data_booking]); 
    }

    public function delete($id){
        $data_booking = \App\Booking::find($id);
        $data_booking->delete($data_booking);
        return redirect('/owner/booking')->with('sukses','Data Delete Successfully');
    }
}
