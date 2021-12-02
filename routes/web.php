<?php

use App\Models\Film;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// you can return json from this route so you can build an API
//Route::get('/films', function () {
//    return ['name'=>'loveActually', 'age'=>15];
//});

//// using info from the request to display
//Route::get('/', function () {
////    $filmName = request('name');
//    return view('films', [
//       'filmName' => request('name'),
//       'filmGenre' => request('genre')
//    ]);
//});

Route::get('/', function () {
    return view('films', [
        'films' => Film::all()
    ]);
});

// route-model binding (binding a route key to an underlying eloquent model)
Route::get('/films/{film}', function (Film $film) {
    //what you pass into the function is what you pass through the request header params, wildcard name has to match param var name
    //this is data storage e.g. would be in a DB
    $films = Film::all();

    if(array_key_exists(count($films), $films)) {
        abort(404, 'Sorry that film was not found');
    }

    //pass some data to the view, create a variable in our view called post, and pass it the array with the key from our URI {key}
    return view('film', [
        'film' => $film
        //whatever key you pass to the view will be the variable name available in the view
        //look up a key in the posts array/data with a key name matching the request param
    ]);
});
