<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Will return contact us messages
     * 
     * @return mixed
     */
    public function messages()
    {
        return view('admin.pages.contact_us')->with([
            'messages' => ContactUs::orderBy('id', 'DESC')->get()
        ]);
    }
}
