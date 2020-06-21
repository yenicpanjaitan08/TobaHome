<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerReportedController extends Controller
{
    public function reported(){
        return view('Owner.admin.reported'); 
    }
}
