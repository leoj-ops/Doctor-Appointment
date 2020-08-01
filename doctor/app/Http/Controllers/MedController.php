<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\med_report;

class MedController extends Controller
{
    public function about() {
        return view('about');
    }

    public function appointment(){
        return view('appointment');
    }

    public function store(){

        $med_report = new med_report;

        $med_report->name = request('name');
        $med_report->telephone = request('telephone');
        $med_report->location = request('location');
        $med_report->email = request('email');
        $med_report->ailments = request('ailments');
        $med_report->doctor = request('doctor');
    
        $med_report->save();
    
        return redirect('/')->with('mssg', 'Thanks for your order!');
        return redirect('/');
    }

    public function show(){
    
        $med_report = med_report::latest()->get();      

        
            return view('home', ['med_report' => $med_report]);

    }

}
