<?php

namespace App\Http\Controllers;

use App\Booking as ModelBooking;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        return view('visitor.index');
    }

    public function info()
    {
        return view('visitor.infoaccount');
    }

    public function contactvisitor()
    {
        return view('visitor.contact');
    }

    
    public function aboutusvisitor()
    {
        return view('visitor.aboutus');
    }

    public function facilitiesvisitor()
    {
        return view('visitor.facilities');
    }

    public function store(Request $request)
    {
        ModelBooking::create($request->all());

        return back()->with('status', 'Proses booking berhasil');
    }
}
