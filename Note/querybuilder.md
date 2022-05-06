Route::get('/', function () {
    return view('welcome');
});

Route::get('/QueryBuilder', [QueryBuilder::class, 'show']);

// Fallback Route
Route::fallback(function () {
    return "You can enter not right route";
});

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class QueryBuilder extends Controller
{
    public function show()
    {
        $users = '';

        // Retrieving All Rows from database
        // $users = DB::table('student')->get();

        // Retrieving Single Row/Column from database
        // $users = DB::table('student')->where('city', 'Pabna')->first();
        // $users = DB::table('student')->where('city', 'Pabna')->value('id');
        // $users = DB::table('student')->find(201311049);
        // $users = DB::table('student')->first();

        // Retrieving a List of columns from database
        // $users = DB::table('student')->pluck('id');

        //Chunked Method use Big Data
        // $users = DB::table('student')->orderby('id')->chunk(3, function ($users) {
        //     echo 'Chunk of 3<br>';
        //     foreach ($users as $user) {
        //         echo $user->id . '<br>';
        //     }
        // });

        // Aggregate Functions
        // $users = DB::table('student')->count();
        // $users = DB::table('student')->max('marks');
        // $users = DB::table('student')->min('marks');

        //Determining if a record exists
        // if (DB::table('student')->where('id', '201311089')->exists()) {
        //     // echo 'Record Exists';
        //     dd('Record Exists');
        // } else {
        //     // echo 'Record Does Not Exist';
        //     dd('Record Does Not Exist');
        // }

        // if (DB::table('student')->where('id', '201311089')->doesntExist()) {
        //     dd('Record Does Not Exist');
        // } else {
        //     dd('Record Exists');
        // }

        // if (DB::table('student')->where('id', '201311041')->exists()) {
        //     dd('Record Exists');
        // }

        // if (DB::table('student')->where('id', '201311089')->doesntExist()) {
        //     dd('Record Does Not Exist');
        // }

        // Select Method
        // $users = DB::table('student')->select('id', 'name', 'city')->get();

        // Distinct Method
        // $users = DB::table('student')->distinct()->get();

        // Where method
        // $users = DB::table('student')->where('id', '=', '201311049')->get();
        // $users = DB::table('student')->where('id', '<', '201311049')->get();
        // $users = DB::table('student')->where('id', '>', '201311049')->get();
        // $users = DB::table('student')->where('name', 'like', 's%')->get();
        // $users = DB::table('student')->where('id', '201311049')->get(); // by default equal

        // Or Where Method
        // $users = DB::table('student')->where('id', '=', '201311057')->orWhere('name', '=', 'Asion')->get();

        //Where Between Method

        // $users = DB::table('student')->whereBetween('Merit', [1, 5])->get();
        // $users = DB::table('student')->whereBetween('Merit', [1, 5])->orWhereBetween('id', [201311041, 201311049])->get();



        dd($users);
        return view('QueryBuilder', ['users' => $users]);
    }
}
