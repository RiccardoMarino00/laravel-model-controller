<?php

namespace App\Http\Controllers;

use app\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $movies = Movie::all();
        var_dump($movies);
        return view('/', compact('movies'));
    }
}
