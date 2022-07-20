<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FlightBooking;

class FlightController extends Controller
{
    public function index()
    {
        return view('admin.pages.flights')->with([
            'bookings' => FlightBooking::orderBy('id', 'DESC')->get()
        ]);
    }
}
