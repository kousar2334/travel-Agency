<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Send flight request
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function flightRequest(Request $request)
    {
        dd($request);
    }
}
