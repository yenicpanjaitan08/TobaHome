<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorFacilityController extends Controller
{
    public function facility(){
        $data_facilities= \App\Facilities::all();
        return view('Visitor.facility',['data_facilities' => $data_facilities]); 
    }

}
