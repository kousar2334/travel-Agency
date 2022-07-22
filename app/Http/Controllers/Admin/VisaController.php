<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentVisaQuery;
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
}
