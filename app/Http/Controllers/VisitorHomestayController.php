<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorHomestayController extends Controller
{
    public function homestay(){
        $data_homestay= \App\Homestay::all();
        return view('Visitor.homestay',['data_homestay'=>$data_homestay]); 
    }
    public function view($id){
        $data_homestay = \App\Homestay::find($id);
        return view('Visitor.homestaydetail',['data_homestay'=> $data_homestay]); 
    }
    public function check($id, Request $request){
        $tanggal = $request->tanggal;
        list($in, $out) = explode(' - ',$tanggal);
        $in = str_replace('/', '-', $in);
        $in = date('Y-m-d', strtotime($in));
        $out = str_replace('/', '-', $out);
        $out = date('Y-m-d', strtotime($out));
        $homestay = DB::table('booking')->where('id_homestay',$id)->where('check_out','>',$in)->first();
        if($homestay != null){
            $check = 'Room Not Available';
        }else{
            $check = 'Room Available';
        }
        return redirect()->action(
            'VisitorHomestayController@view', ['id' => $id]
        )->with('check', $check);
    }
}
