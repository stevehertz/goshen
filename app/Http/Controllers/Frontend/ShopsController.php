<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopsController extends Controller
{


    public function shop()  
    {
        return view('frontend.shop.shop');
    }

    //
    public function contact()  
    {
        return view('frontend.shop.contact');    
    }
}