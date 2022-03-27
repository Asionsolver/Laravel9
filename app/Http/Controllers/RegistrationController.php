<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

use App\Rules\Uppercase;

class RegistrationController extends Controller
{
    function showForm()
    {

        // print_r('get method');
        return view('registration');
    }
    function signup(Request $request)
    {
        // print_r($request->all()); //all data access and show all data your post routes
        // print_r($request->input()); //all data access and show all data your post routes
        // dd($request);
        // print_r($request->all());
        // print_r($request->input('name')); //access individual input data
        // print_r($request->input('email'));//all data access and show all data your post routes
        // print_r($request->name); //access access via dynamic properties
        // print_r($request->password);  //access access via dynamic properties

        // check input data present

        // individual data check
        // if ($request->has('name')) {
        //     print_r($request->input('name'));
        // }

        // multiple data check
        // if ($request->has(['name', 'email'])) {
        //     print_r($request->input('name'));
        //     print_r($request->input('email'));
        // }


        //  has any method
        // if ($request->hasAny(['name', 'email'])) {
        //     print_r($request->input('name'));
        //     print_r($request->input('email'));
        // }


        //  filled method
        // if ($request->filled('name')) {
        //     print_r($request->input('name'));
        // }

        //  missing method
        // if ($request->missing('name1')) {
        //     print_r('inside missing');
        //     print_r('name1 not present');
        // }

        //  whenHas method
        // $request->whenHas('name', function ($input) {
        //     print_r('Data Modified');
        // });

        //  whenFilled method
        // $request->whenFilled('name', function ($input) {
        //     print_r('Data Modified');
        // });

        // access From old data
        // $request->flash();  //all data store in session
        // $request->flashOnly(['name', 'email', 'password']);  //individual data store in session
        // print_r($request->old('name'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));

        //flashExcepted method
        // $request->flashExcept(['name', 'email']);
        // print_r($request->old('name'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));

        //Redirect on Form Submission with old Data

        // return redirect('olddata')->withInput();
        // return redirect()->route('old')->withInput();

        // return redirect('olddata')->withInput(
        //     $request->except('name')
        // );



        // Form Validation using validate method in Laravel

        // Single Rule

        // $validate = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        // Multiple Rule Specified using Single | delimited String

        $validate = $request->validate([
            'name' => ['required', 'min:5', new Uppercase],
            'email' => 'required',
            //Custom Validation Rule using Closures
            'password' => ['required', 'min:8', function ($attribute, $value, $fail) {
                if ($value === '12345678') {
                    $fail('The ' . $attribute . ' is invalid. Please chose another ' . $attribute . ' combination.');
                }
            }],
        ]);

        // Multiple Rule

        // $validate = $request->validate([
        //     'name' => ['required', 'min:5'],
        //     'email' => ['required'],
        //     'password' => ['required', 'min:8'],
        // ]);

        print_r('Form are Validated');

        $input = $request->except('_token');

        return view('registration', ['data' => $input]);
    }
}
