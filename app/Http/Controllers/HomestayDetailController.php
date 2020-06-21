<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use App\Rating;

class HomestayDetailController extends Controller
{
    public function index()
    {
        $rating = Rating::all()->sortByDesc('id');
        return view('visitor.homestaydetail', compact('rating'));
    }

    public function edit($id)
    {
        $rating = DB::table('ratings')->where('id', $id)->get();

        return view('visitor.editreview', ['rating' => $rating]);
    }

    public function update(Request $request)
    {

        DB::table('ratings')->where('id', $request->id)->update([
            'rating' => $request->rating,
            'review' => $request->review
        ]);
        return redirect('/homestaydetails')->with('status', 'Review berhasil di update');
    }

    public function store(Request $request)
    {
        //

        $rating = new Rating();
        $rating->rating = $request->get('rating');
        $rating->name = $request->get('name');
        $rating->email = $request->get('email');
        $rating->review = $request->get('review');
        $rating->save();

        return redirect('/homestaydetails')->with('status', 'Reviews berhasil di tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($rating)
    {
        DB::table('ratings')->where('id', $rating)->delete();

        return redirect('/homestaydetails')->with('status', 'Review berhasil di delete');
    }
}
