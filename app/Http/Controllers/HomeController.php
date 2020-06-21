<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'Admin') { 
            return view('Admin.layouts.dashboard1');
        } elseif (Auth::user()->role == 'Owner') { 
            $data_homestay = \DB::table('homestay')->get();
            $data_homestay = count($data_homestay);

            $data_booking = \DB::table('booking')->get();
            $data_booking = count($data_booking);

            $data_profil = \DB::table('users')->where('role','visitor')->get();
            $data_profil = count($data_profil);

            $data_review = \DB::table('review')->get();
            $data_review = count($data_review);

            return view('Owner.admin.dashboard', compact('data_homestay','data_booking','data_profil','data_review')); 
        } elseif (Auth::user()->role == 'Visitor') { 
            return view('Visitor.home');
        }
    }
}
