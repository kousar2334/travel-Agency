<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HajjQuery;
use Illuminate\Http\Request;

class HajjController extends Controller
{
    /**
     * Will return hajj queries
     * 
     * 
     * @return mixed
     */
    public function hajjQueries()
    {
        return view('admin.pages.hajj_queries')->with([
            'queries' => HajjQuery::orderBy('id', 'DESC')->get()
        ]);
    }
}
