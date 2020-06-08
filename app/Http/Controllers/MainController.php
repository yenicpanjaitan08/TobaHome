<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        return view('homebaru'); 
    }
    public function rooms(){
        $data_room = \App\Tipe_Room::all();
        return view('homebaru',['data_room' => $data_room]); 
    }
}
