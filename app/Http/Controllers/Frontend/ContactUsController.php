<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ContactUsController extends Controller
{
    /**
     * 
     * Will store contact us message
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function storeContactUs(Request $request)
    {
        try {
            $contact = new ContactUs;
            $contact->first_name = $request['first_name'];
            $contact->last_name = $request['last_name'];
            $contact->email = $request['email'];
            $contact->phone = $request['phone'];
            $contact->message = $request['message'];
            $contact->save();
            Toastr::success('Message Sending Successfully');
            return redirect()->route('frontend.contact.us');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
