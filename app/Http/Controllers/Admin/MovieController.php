<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
class MovieController extends Controller
{
    //
    public function index(){
        $movies = Movie::all();
        dd($movies);
        return view('admin.movies.index', [ 'movies' => $movies ]);
    }
}
