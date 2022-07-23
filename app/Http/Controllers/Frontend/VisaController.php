<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Mail\StudentVisaMail;
use App\Mail\TouristVisaMail;
use App\Models\StudentVisaQuery;
use App\Models\TouristVisaQuery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VisaController extends Controller
{
    /**
     * Will store student visa query
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function storeStudentVisaQuery(Request $request)
    {
        try {
            $student_visa = new StudentVisaQuery;
            $student_visa->country     = $request['country'];
            $student_visa->degree = $request['degree'];
            $student_visa->user_id = Auth::user()->id;
            $student_visa->save();

            Mail::to(siteInfo()->email)->send(new StudentVisaMail($student_visa));

            toastNofication('success', 'Successfully sumitted');
            return redirect()->route('home');
        } catch (\Exception $e) {
            toastNofication('error', 'Sending Failed');
            return redirect()->back();
        }
    }
    /**
     * Will store tourist visa queries
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function storeTouristVisaQuery(Request $request)
    {
        try {
            $tourist_visa = new TouristVisaQuery;
            $tourist_visa->country     = $request['country'];
            $tourist_visa->comment = $request['comment'];
            $tourist_visa->user_id = Auth::user()->id;
            $tourist_visa->save();

            Mail::to(siteInfo()->email)->send(new TouristVisaMail($tourist_visa));

            toastNofication('success', 'Successfully sumitted');
            return redirect()->route('home');
        } catch (\Exception $e) {
            toastNofication('error', 'Sending Failed');
            return redirect()->back();
        }
    }
}
