<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class StudentDetailsController extends Controller
{
    public function show()
    {
        // Retrieving All Rows from Table
        // $students = DB::table('student')->get();

        //Retrieving Single Row/Column from Table
        // $students = DB::table('student')->first();
        // $students = DB::table('student')->where('city', 'Dhaka')->first();
        // $students = DB::table('student')->where('city', 'Godagari')->first();

        // value Method
        // $students = DB::table('student')->where('city', 'Dhaka')->value('name');
        // dd($students);
        // $students = DB::table('student')->find(5);

        // pluck Method
        // $students = DB::table('student')->pluck('name', 'marks');

        //chunk Method
        // $students = DB::table('student')->orderBy('id')->chunk(3, function ($students) {
        //     echo 'Chunked Data: <br>';
        //     foreach ($students as $student) {
        //         echo $student->name . '<br>';
        //     }
        // });

        //Aggregates - count
        // $students = DB::table('student')->count();


        // max and min
        // $students = DB::table('student')->max('marks');
        // $students = DB::table('student')->min('marks');

        //Determining If Records Exist
        // if (DB::table('student')->where('id', '10')->exists()) {
        //     dd('Yes');
        // }
        //  if (DB::table('student')->where('id', '20')->doesntExist()) {
        //     dd('No');
        // }

        //select Method
        // $students = DB::table('student')->select('name', 'marks')->get();

        // distinct Method
        // $students = DB::table('student')->distinct()->get();

        //where Method
        // $students = DB::table('student')->where('id', '>', 5)->get();
        // $students = DB::table('student')->where('name', 'like', 'S%')->get();

        //orWhere Method
        // $students = DB::table('student')->where('id', '>', 5)->orWhere('name', '=', 'Shanto')->get();

        //whereBetween Method
        // $students = DB::table('student')->whereBetween('marks', [80, 90])->get();

        //orWhereBetween Method
        // $students = DB::table('student')->orWhereBetween('marks', [80, 89])->get();
        // $students = DB::table('student')->orWhereBetween('marks', [80, 89])->orWhereBetween('marks', [90, 100])->get();

        //whereNotBetween Method
        // $students = DB::table('student')->whereNotBetween('marks', [80, 90])->get();


        //whereDate Method
        // $students = DB::table('student')->whereDate('date', '2022-03-08')->get();

        //whereMonth Method
        // $students = DB::table('student')->whereMonth('date', '03')->get();

        //whereYear Method
        // $students = DB::table('student')->whereYear('date', '2022')->get();

        //whereDay Method
        // $students = DB::table('student')->whereDay('date', '08')->get();

        //latest Method
        // $students = DB::table('student')->latest('date')->get();
        // $students = DB::table('student')->latest('date')->first();

        //oldest Method
        // $students = DB::table('student')->oldest(date)->get();
        // $students = DB::table('student')->oldest('date')->first();

        //orderBy Method
        // $students = DB::table('student')->orderBy('marks', 'desc')->get();
        // $students = DB::table('student')->orderBy('marks', 'asc')->get();

        //random Method
        // $students = DB::table('student')->inRandomOrder()->get();
        // $students = DB::table('student')->inRandomOrder()->first();

        //groupBy Method
        // $students = DB::table('student')->groupBy('city')->get();

        //having Method
        // $students = DB::table('student')->having('marks', '>', 80)->get();

        //groupByHaving Method
        // $students = DB::table('student')->groupBy('marks')->having('marks', '>', 80)->get();



        dd($students);

        return view('studentsdetails', ['students' => $students]);
    }
}