<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\FlightBooking;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FlightController extends Controller
{
    /**
     * Send flight request
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function flightBookingRequest(Request $request)
    {
        try {
            $booking = new FlightBooking;
            $booking->pickup_point     = $request['from'];
            $booking->destination = $request['destination'];
            $booking->departure = $request['departure'];
            $booking->return_date = $request['return'];
            $booking->adults = $request['adults'];
            $booking->childrens = $request['childrens'];
            $booking->class = $request['class'];
            $booking->user_id = Auth::user()->id;
            $booking->save();
            // $data = $booking;
            // Mail::to('kousar.cse2334@gmail.com')->send(new HotelBookingEmail($data));


            toastNofication('success', 'Flight Booking Request Sending Successfully');
            return redirect()->route('home');
        } catch (\Exception $e) {
            toastNofication('error', 'Request Sending Failed');
            return redirect()->back();
        }
    }
}
