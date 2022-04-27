<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    function show()
    {
        $websiteName = 'Asion';
        $user = 'Admin';
        $userType = $user === 'admin' ? true : false;
        return view('exercise.productPage', ['websiteName' => $websiteName, 'userType' => $userType]);
    }
}