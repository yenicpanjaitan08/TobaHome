<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorRoomsController extends Controller
{
    public function rooms(){
        $data_room = \App\Tipe_Room::all();
        return view('Visitor.rooms',['data_room' => $data_room]); 
    }

    public function view($id){
        $data_room = \App\Tipe_Room::find($id);
        return view('Visitor.roomsdetail',['data_room' => $data_room]); 
    }
}
