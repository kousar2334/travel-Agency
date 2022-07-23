<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ContactUs;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

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

            Mail::to(siteInfo()->email)->send(new ContactUsMail($contact));

            toastNofication('success', 'Message sending successfully');
            return redirect()->route('frontend.contact.us');
        } catch (\Exception $e) {
            toastNofication('error', 'Message sending failed');
            return redirect()->back();
        }
    }
}
