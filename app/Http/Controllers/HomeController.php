<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;

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
    public function index(){
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('home', $info);
    }


    public function facility(){
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('facility', $info);
    }


    public function profile(){
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('profile', $info);
    }


    public function suscriptions(){
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('suscriptions', $info);
    }


    public function bookings(){
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('bookings', $info);
    }


    public function classes(){
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('classes', $info);
    }


    public function dashboard(){
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('dashboard', $info);
    }

}
