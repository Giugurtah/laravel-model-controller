<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index($id) {
        $movie = Movie::find($id);
        return view('movie', compact('movie'));
    }
}
