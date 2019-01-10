<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function addmovie(){
        $title="Add Movie";
        return view('pages.backend.movies.addmovie')->with('title',$title);
    }

    public function editmovie(){
        $title="Edit Movie";
        return view('pages.backend.movies.editmovie')->with('title',$title);
    }

    public function viewmovies(){
        $title="View Movies";
        return view('pages.backend.movies.viewmovies')->with('title',$title);
    }
}
