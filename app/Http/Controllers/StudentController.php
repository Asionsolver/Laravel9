<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function test()
    {

        $name = 'Sakib';
        $email = 'sakib274@gmail.com';
        $city = 'Rajshahi';


        //insert method
        // DB::insert('insert into student ( name,email,city) values (?, ?,?)', ['Rasel', 'rasel274@gmail.com', 'Dhaka']);

        // DB::insert('insert into student ( name,email,city) values (:name,:email,:city)', ['name' => 'Shanto', 'email' => 'shanto274@gmail.com', 'city' => 'Dinajpur']); //using named parameter

        // DB::insert('insert into student ( name,email,city) values (:name,:email,:city)', ['name' => $name, 'email' => $email, 'city' => $city]); //using named parameter

        //update method
        // DB::update('update student set city = ? where id = ?', ['Chapai-Nawabgang', 5]);
        // DB::update('update student set city = :city where id = :id', ['city' => 'Chapai-Nawabgang', 'id' => 5]);

        // DB::delete('delete from student where id = ?', [24]); //delete method
        // DB::delete('delete from student where id = :id', ['id' => 7]); //delete method

        //not recommended
        // DB::unprepared('delete from student where id = 5'); //unprepared method

        //transaction method
        DB::transaction(function () {
            DB::update('update student set name = ? where id=?', ['John', 4]);
            DB::delete('delete from student where id = :id', ['id' => 3]);
            DB::insert('insert into student ( name,email,city) values (?, ?, ?)', ['Rasel', 'rasel274@gmail.com', 'Dhaka']);
            DB::delete('delete from student where id = :id', ['id' => 27]);
        });



        $students = DB::select('select * from student'); // select * from student
        // $students = DB::select('select * from student where city = ?', ['pabna']); // Query Builder
        // $students = DB::select('select * from student where id = ?', ['1']); // Query Builder
        // $students = DB::select('select * from student where city = :city', ['city' => 'rajshahi']); // Query Builder
        return view('student', ['students' => $students]);
    }
}