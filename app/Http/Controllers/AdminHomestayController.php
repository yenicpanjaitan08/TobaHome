<?php

namespace App\Http\Controllers;
use App\Homestay;
use Illuminate\Http\Request;

class AdminHomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homestay = Homestay::paginate(5);
        return view('Admin.homestay.homestay', compact('homestay'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.homestay.create');
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
            'name' => 'required',
            'status' => 'required',
            'header_image' => 'required',
            'description' => 'required',

        ]);

        $header_image = $request->gambar;
        $new_gambar = time().$header_image->getClientOriginalName();

        $homestay = Homestay1::create([
            'id' => $request->id,
            'name' => $request->nama_homestay,
            'status' => $request->status,
            'description' => $request->deskripsi_homestay,
            'header_image' => 'public/assets/dist/img/'.$new_gambar
            
        ]);
        
        $header_image->move('public/assets/dist/img/', $new_gambar);
        return redirect()->back()->with('Sukses', 'Data Homestay Berhasil Disimpan');
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
    
        $homestay = Homestay::findorfail($id);
        return view('Admin.homestay.edit', compact('homestay'));
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

        $homestay_data =[
            'id' => $request->id,
            'name' => $request->nama_homestay,
            'status' => $request->status,
            'header_image'    => $request->gambar,
            'description'  => $request->deskripsi_homestay,

        ];

        Homestay::whereId($id)->update($homestay_data);
         return redirect("/admin/homestay");
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homestay= Homestay::findorfail($id);
        $homestay->delete();

        return redirect()->back()->with('Succes','Data Homestay Berhasil Dihapus');
    }
}
