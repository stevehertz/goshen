<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }

    public function safari()
    {
        return view('frontend.safari.index');
    }

    public function shop()
    {
        return view('frontend.shop.index');
    }

    public function coming()
    {
        return view('frontend.coming.index');
    }
}
