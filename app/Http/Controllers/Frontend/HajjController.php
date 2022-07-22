<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HajjQuery;
use Illuminate\Http\Request;

class HajjController extends Controller
{
    /**
     * Will store hajj query
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function storeHajjQuery(Request $request)
    {
        try {
            $query = new HajjQuery();
            $query->full_name = $request['full_name'];
            $query->phone = $request['phone'];
            $query->email = $request['email'];
            $query->comment = $request['comment'];
            $query->save();
            // $data = $booking;
            // Mail::to('kousar.cse2334@gmail.com')->send(new HotelBookingEmail($data));

            toastNofication('success', 'Your request is sending successfully');
            return redirect()->route('home');
        } catch (\Exception $e) {
            dd($e);
            Toastr::error('Request Sending Failed', 'Failed');
            return redirect()->back();
        }
    }
}
