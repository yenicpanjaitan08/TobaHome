<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorHomeController extends Controller
{
    public function main(){
        return view('Visitor.home'); 
    }
    public function rooms(){
        $data_room = \App\Tipe_Room::all();
        return view('Visitor.home',['data_room' => $data_room]); 
    }
}
