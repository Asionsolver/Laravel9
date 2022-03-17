<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //controller returning string
    // function show()
    // {
    //     return "Hello controller " ;
    // }

    //controller returning string as parameters
    // function show($name)
    // {
    //     return "Hello controller " . $name;
    // }


    //controller returning view
    // function show()
    // {
    //     return view('admin.show');
    // }

    //getting url parameter in controller class and passing to view
    // function show($name)
    // {
    //     return view('admin.show', ['name' => $name]);
    // }

    // passing data from controller to view
    // function show()
    // {
    //     $name = 'Ashis Kumar Pal';
    //     return view('admin.show', ['name' => $name]);
    // }

    // passing multiple method inside Controller

    function show()
    {
        return view('admin.about');
    }
    function contact()
    {
        return view('admin.contact');
    }
}