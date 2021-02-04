<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Controller to load the home view..

    public function home()
    {
       return view('home');
    }
}
