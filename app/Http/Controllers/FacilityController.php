<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function facility(){
        $data_facilities= \App\Facilities::all();
        return view('facility.facility',['data_facilities' => $data_facilities]); 
    }

}
