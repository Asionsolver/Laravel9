<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return "Welcome to Home Page with home method";
    }

    function contact(){
        return "Welcome to contact page with contact method";
    }

    function about(){
        return "welcome to about page with about method";
    }
}