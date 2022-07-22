<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentVisaQuery;
use App\Models\TouristVisaQuery;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    /**
     * Will return student visa queries
     * 
     * @return mixed
     */
    public function studentVisaQueries()
    {
        return view('admin.pages.student_visa_queries')->with([
            'queries' => StudentVisaQuery::orderBy('id', 'DESC')->get()
        ]);
    }
    /**
     * Will return tourist visa queries
     * 
     * @return mixed
     */
    public function touristVisaQueries()
    {
        return view('admin.pages.tourist_visa_queries')->with([
            'queries' => TouristVisaQuery::orderBy('id', 'DESC')->get()
        ]);
    }
}
