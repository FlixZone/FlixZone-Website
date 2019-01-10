<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TVshowsController extends Controller
{
    public function addtvshow(){
        $title="Add TV Show";
        return view('pages.backend.tvshows.addtvshow')->with('title',$title);
    }

    public function edittvshow(){
        $title="Edit TV Show";
        return view('pages.backend.tvshows.edittvshow')->with('title',$title);
    }

    public function viewtvshows(){
        $title="View TV Shows";
        return view('pages.backend.tvshows.viewtvshows')->with('title',$title);
    }
}
