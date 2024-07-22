<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralViewController extends Controller
{
    

    /**
     * Display a listing of the resource.
     */
    public function no_authorized()
    {
        return view('general.no_authorized');
    }


    public function dashboard()
    {
        return view('general.dashboard');
    }

}
