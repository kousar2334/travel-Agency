<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PackageTourQuery;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Will return package tour queries
     * 
     * @return mixed
     */
    public function packageTourQueries()
    {
        return view('admin.pages.package_tour_queries')->with([
            'queries' => PackageTourQuery::orderBy('id', 'DESC')->get()
        ]);
    }
}
