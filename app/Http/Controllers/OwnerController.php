<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(){
        $data_homestay = \DB::table('homestay')->get();
        $data_homestay = count($data_homestay);

        $data_booking = \DB::table('booking')->get();
        $data_booking = count($data_booking);

        $data_profil = \DB::table('profil')->where('role','visitor')->get();
        $data_profil = count($data_profil);

        $data_review = \DB::table('review')->get();
        $data_review = count($data_review);

        return view('Owner.admin.dashboard', compact('data_homestay','data_booking','data_profil','data_review')); 
    }

    
}
