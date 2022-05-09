Student.blade.php file content

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <h1>This is Pagination Page</h1>


    @foreach ($products as $student)
        <h2>{{ $student->name }}</h2>
        <p>{{ $student->email }}</p>
        <p>{{ $student->id }}</p>
    @endforeach

    {{-- link pagination --}}
    {{ $products->links() }}
</body>

</html>


web.php file content:

//Create a route for controller
Route::get(('/pagination'), [Pagination::class, 'show']);
// Route::get(('/pagination/cs/student'), [Pagination::class, 'show']);

Pagination.blade.php file content:

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

appServiceProvider.php file content:

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // paginator() is used to set the default pagination view.
        Paginator::useBootstrap();
    }
}
