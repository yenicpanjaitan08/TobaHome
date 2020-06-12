<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function rooms(){
        $data_room = \App\Tipe_Room::all();
        return view('rooms.rooms',['data_room' => $data_room]); 
    }

    public function view($id){
        $data_room = \App\Tipe_Room::find($id);
        return view('rooms.roomsdetail',['data_room' => $data_room]); 
    }
}
