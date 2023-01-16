<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $all_movies = Movie::all();

        return view('pages.home', compact('all_movies'));
    }
}
