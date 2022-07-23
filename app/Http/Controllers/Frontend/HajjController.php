<?php

namespace App\Http\Controllers\Frontend;

use App\Models\HajjQuery;
use Illuminate\Http\Request;
use App\Mail\HajjBookingMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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

            Mail::to(siteInfo()->email)->send(new HajjBookingMail($query));

            toastNofication('success', 'Your request is sending successfully');
            return redirect()->route('home');
        } catch (\Exception $e) {
            dd($e);
            Toastr::error('Request Sending Failed');
            return redirect()->back();
        }
    }
}
