<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function show()
    {
        $name = 'ashis';
        $contact = '017240000000';

        $user = 'admin';
        $userType = $user == 'admin' ? true : false;
        $students = ['Ashis', 'Asis', 'solver'];
        // $students = [];
        return view('include', ['contact' => $contact, 'name' => $name, 'userType' => $userType, 'students' => $students]);
    }


    //generate function

}