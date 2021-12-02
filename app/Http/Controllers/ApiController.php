<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllFilms() {
        return Film::all();
    }

    public function createFilm(Request $request) {
        //validate the request
        return Film::create([
            'genre_id' => $request->input('genre_id'),
            'name' => $request->input('name'),
            'rating' => $request->input('rating')
        ]);
    }

//    public function getFilm($id) {
//        // logic to get a specific film goes here
//    }
//
//    public function updateFilm(Request $request, $id) {
//        // logic to update a film goes here
//    }
//
//    public function deleteFilm($id) {
//        // logic to delete a film goes here
//    }
}
