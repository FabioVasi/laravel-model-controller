<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        //dd(Movie::all());

        return view('welcome', ['movies' => Movie::all()]);
    }
}
