<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {

        $posts = config('model.posts');

        return view('home',compact('posts'), ['movies' => Movie::all()]);

    }
}
