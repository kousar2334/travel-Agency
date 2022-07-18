<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\HoltelBooking;
use App\Mail\HotelBookingEmail;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Mail;

class HotelsController extends Controller
{
    /**
     * Will store hotel booking
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function hotelBooking(Request $request)
    {
        try {
            $booking = new HoltelBooking;
            $booking->destination = $request['destination'];
            $booking->check_in = $request['check_in'];
            $booking->check_out = $request['check_out'];
            $booking->adults = $request['adults'];
            $booking->Children = $request['Children'];
            $booking->rooms = $request['rooms'];
            $booking->user_id = Auth::user()->id;
            $booking->save();
            $data = $booking;
            Mail::to('kousar.cse2334@gmail.com')->send(new HotelBookingEmail($data));

            Toastr::success('Hotel Booking Request Sending Successfully', 'Success');
            return redirect()->route('home');
        } catch (\Exception $e) {
            Toastr::error('Request Sending Failed', 'Failed');
            return redirect()->back();
        }
    }
}
