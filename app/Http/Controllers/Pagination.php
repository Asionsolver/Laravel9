<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagination extends Controller
{
    public function show()
    {
        $products = DB::table('student')->get();
        // $products = DB::table('student')->paginate(5);
        return view('pagination.student', ['products' => $products]);
    }
}