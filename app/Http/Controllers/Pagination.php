<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagination extends Controller
{
    public function show()
    {
        // $products = DB::table('student')->get();
        // $products = DB::table('student')->paginate(3);
        // withPath() is used to set the base URL for the pagination links.
        // $products->withPath('/cs/student');

        //simplePaginate() is used to create a simple pagination.
        $products = DB::table('student')->simplePaginate(3);


        return view('pagination.student', ['products' => $products]);
    }
}
