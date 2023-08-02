<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    //Create participants
    public function view_speaker(){
        return view('frontend.speaker');
    }

    public function view_snapshoot(){
        return view('frontend.snapshoot');
    }

    public function view_about_event(){
        return view('frontend.about_event');
    }

    public function view_about_organizer(){
        return view('frontend.about_organizers');
    }

    public function view_contact(){
        return view('frontend.contact');
    }

    public function view_schedule(){
        return view('frontend.schedule');
    }
    
}
