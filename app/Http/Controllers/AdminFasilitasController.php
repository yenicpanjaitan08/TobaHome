<?php

namespace App\Http\Controllers;

use App\Facilities;
use Illuminate\Http\Request;

class AdminFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peralatan = Facilities::paginate(5);
        return view('Admin.fasilitas.fasilitas', compact('peralatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.fasilitas.create');
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
            'facility_name' => 'required',
            'desc' => 'required'

        ]);

        $peralatan = Peralatan::create([
            'id' => $request->id,
            'facility_name' => $request->nama_fasilitas,
            'desc' => $request->keterangan,
        ]);

        return redirect()->back()->with('Sukses', 'Data Fasilitas Berhasil Disimpan');
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
        $peralatan = Facilities::findorfail($id);
        return view('Admin.fasilitas.edit', compact('peralatan'));
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

        $peralatan_data =[
            'id' => $request->id,
            'facility_name' => $request->nama_fasilitas,
            'desc' => $request->keterangan,

        ];

        Facilities::whereId($id)->update($peralatan_data);
         return redirect("/admin/fasilitas");
         

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peralatan = Facilities::findorfail($id);
        $peralatan->delete();

        return redirect()->back()->with('Succes','Data Fasilitas Berhasil Dihapus');
    }
}
