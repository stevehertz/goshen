<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SafariController extends Controller
{
    //
    public function about()
    {
        return view('frontend.safari.about');
    }

    public function our_story()
    {
        return view('frontend.safari.our-story');
    }

    public function our_products()
    {
        return view('frontend.safari.products');
    }

    public function sustainability()
    {
        return view('frontend.safari.sustainability');
    }

    public function news()
    {
        return view('frontend.safari.news');
    }

    public function contact()
    {
        return view('frontend.safari.contact');
    }
}
