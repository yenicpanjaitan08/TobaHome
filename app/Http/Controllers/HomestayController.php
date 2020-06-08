<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomestayController extends Controller
{
    public function homestay(){
        $data_homestay= \App\Homestay::all();
        return view('homestay.homestay',['data_homestay'=>$data_homestay]); 
    }
    public function view($id){
        $data_homestay = \App\Homestay::find($id);
        return view('homestay.homestaydetail',['data_homestay'=> $data_homestay]); 
    }
}
