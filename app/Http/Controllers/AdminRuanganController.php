<?php

namespace App\Http\Controllers;
use App\Tipe_Room;
use Illuminate\Http\Request;

class AdminRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = Tipe_Room::paginate(5);
        return view('Admin.ruangan.ruangan', compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.ruangan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,  [
            'id' => 'required',
            'room_type' => 'required',
            'capacity' => 'required',
            'room_size' => 'required',
            'bed_type' => 'required',
            'price' => 'required',

        ]);

        $ruangan = Ruangan::create([
            'id' => $request->id,
            'room_type' => $request->tipe_room,
            'capacity' => $request->kapasitas,
            'room_size' => $request->ukuran,
            'bed_type' => $request->tipe_bed,
            'price' => $request->harga,
            
        ]);

        return redirect()->back()->with('Sukses', 'Data Ruangan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruangan = Tipe_Room::findorfail($id);
        return view('Admin.ruangan.edit', compact('ruangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [  
            'id' => 'required'


        ]);

        $ruangan_data =[
            'id' => $request->id,
            'room_type' => $request->tipe_room,
            'capacity' => $request->kapasitas,
            'room_size' => $request->ukuran,
            'bed_type' => $request->tipe_bed,
            'price' => $request->harga,

        ];

        Ruangan::whereId($id)->update($ruangan_data);
         return redirect("/admin/ruangan");
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruangan = Tipe_Room::findorfail($id);
        $ruangan->delete();

        return redirect()->back()->with('Succes','Data Ruangan Berhasil Dihapus');
    }
}
