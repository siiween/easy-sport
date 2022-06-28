<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Classes;
use App\Models\Facility_booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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
        $facilities = Facility::all()->reverse();
        $info = [
            'facilities' => $facilities,
        ];
        return view('home', $info);
    }


    public function facility($id)
    {

        $info = [
            'facility' => Facility::find($id)
        ];


        return view('facility', $info);
    }

    public function crearFacility(Request $request)
    {
        $newFacility = new Facility();
        $newFacility->description =  $request->post('descripcion');
        $newFacility->sq_meters =  $request->post('tamano');
        $newFacility->capacity =  $request->post('capacidad');
        $newFacility->opens_at =  $request->post('abre');
        $newFacility->closes_at =  $request->post('cierra');
        $newFacility->sport =  $request->post('deporte');
        $newFacility->save();
        return redirect()->back();
    }

    public function crearFacility_booking(Request $request, $id)
    {
        $newFacility_booking = new Facility_booking();
        $newFacility_booking->time =  $request->post('hora');
        $newFacility_booking->date =  $request->post('fecha');
        $newFacility_booking->facility_id =  $id;
        $newFacility_booking->user_id = Auth::user()->id;
        $newFacility_booking->save();
        return redirect()->back();
    }

    public function eliminarFacility(Request $request, $id)
    {
        $facility = Facility::find($id);

        // $facilityBooking = Facility_booking::where('facility', $id);
        //$facilityBooking->delete();
        $facility->delete();

        return redirect()->back();
    }

    public function editProfile(Request $request)
    {

        $user = User::find(Auth::user()->id);

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        return redirect()->back();
    }

    public function profile()
    {
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('profile', $info);
    }


    public function suscriptions()
    {
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('suscriptions', $info);
    }


    public function bookings()
    {
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('bookings', $info);
    }


    public function classes()
    {
        $info = [
            'classes' => Classes::all()->reverse(),
        ];
        return view('classes', $info);
    }


    public function dashboard()
    {
        $facilities = Facility::all();
        $info = [
            'facilities' => $facilities,
        ];
        return view('dashboard', $info);
    }
}
