<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    public function aboutus()
    {
        return view('about-us');
    }
}

