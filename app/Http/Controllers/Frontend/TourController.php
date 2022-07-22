<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\PackageTourQuery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    /**
     * Will store package tour query
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function storePackageToutQuery(Request $request)
    {
        try {
            $tour_query = new PackageTourQuery;
            $tour_query->destination = $request['destination'];
            $tour_query->start_date = $request['start_date'];
            $tour_query->end_date = $request['end_date'];
            $tour_query->user_id = Auth::user()->id;
            $tour_query->save();
            // $data = $booking;
            // Mail::to('kousar.cse2334@gmail.com')->send(new HotelBookingEmail($data));


            toastNofication('success', 'Sending successfully');
            return redirect()->route('home');
        } catch (\Exception $e) {
            toastNofication('error', 'Request Sending Failed');
            return redirect()->back();
        }
    }
}
