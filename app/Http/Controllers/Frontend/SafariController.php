<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SafariController extends Controller
{
    //
    public function our_story()  
    {
        return view('frontend.safari.our-story');
    }

    public function fair_scoop()  
    {
        return view('frontend.safari.fair-scoop');
    }

    public function contact()  
    {
        return view('frontend.safari.contact');
    }
}
