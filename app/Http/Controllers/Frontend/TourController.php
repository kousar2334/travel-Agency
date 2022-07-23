<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Mail\PackageTourBooking;
use App\Models\PackageTourQuery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

            Mail::to(siteInfo()->email)->send(new PackageTourBooking($tour_query));


            toastNofication('success', 'Request sending successfully');
            return redirect()->route('home');
        } catch (\Exception $e) {
            toastNofication('error', 'Request Sending Failed');
            return redirect()->back();
        }
    }
}
