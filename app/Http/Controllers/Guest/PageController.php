<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    function index()
    {
        $movies = Movie::all();
        //dd(Movie::all());
        return view('movie', compact('movies'));
    }
}
