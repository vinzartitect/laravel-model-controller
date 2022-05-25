<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();
        // dump($movies);

        return view('home', compact('movies'));
    }
}
