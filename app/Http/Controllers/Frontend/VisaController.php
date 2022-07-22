<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\StudentVisaQuery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            // $data = $booking;
            // Mail::to('kousar.cse2334@gmail.com')->send(new HotelBookingEmail($data));

            toastNofication('success', 'Successfully sumitted');
            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
