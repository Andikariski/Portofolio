<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Client extends Controller
{
    public function landingPage()
    {
        return view('Frontend.main');
    }
}
