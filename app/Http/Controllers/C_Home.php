<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function homepage()
    {
        return view('home.home_page');
    }
}
