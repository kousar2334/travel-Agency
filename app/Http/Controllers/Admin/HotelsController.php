<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HoltelBooking;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function index()
    {
        return view('admin.pages.hotel_booking')->with([
            'bookings' => HoltelBooking::all()
        ]);
    }
}
