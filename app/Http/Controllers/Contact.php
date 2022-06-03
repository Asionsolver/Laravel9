<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    function contact()
    {
        return view('SimpleProject.contact');
    }
}