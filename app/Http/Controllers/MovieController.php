<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();

        return view('index', ['movies' => $movies]);
        //return view('index', compact('movies'));
    }
}
