<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\med_report;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $med_report = med_report::latest()->get();      

        
         return view('home', ['med_report' => $med_report]);
        #return view('home');
    }
}
