<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $movies = Movie::all();
        // var_dump($movies);
        return view('layout.AppLayout', compact('movies'));
    }
}
