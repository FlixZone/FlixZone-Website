<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    // Pages Controllers
    public function addmovie(){
        $title="Add Movie";
        return view('pages.backend.movies.addmovie')->with('title',$title);
    }

    public function editmovie(){
        $title="Edit Movie";
        return view('pages.backend.movies.editmovie')->with('title',$title);
    }

    public function viewmovies(){
        $movies = Movie::all();
        //dd($movies);
        $title="View Movies";
        return view('pages.backend.movies.viewmovies')->with('movies',$movies)->with('title',$title);
    }

    // Action Controllers

    public function storemovie(Request $request){

        $this->validate(request(), [
            
            'the_movie_db_id' => 'required',
            'movie_name' => 'required',
            'mega_link' => 'required',
            'mega_key' => 'required',
            'torrent_file' => 'nullable|mimes:torrent',
        ]);

        $title='Add Movie';

        // Add Movie
        $movie= new Movie;
        $movie->the_movie_db_id = $request->input('the_movie_db_id');
        $movie->name = $request->input('movie_name');
        $movie->mega_link = $request->input('mega_link');
        $movie->mega_key = $request->input('mega_key');

        // Handle Torrent Upload

        if($request->hasFile('torrent_file')){
            // File Name With Extention
            $filenameWithExt=$request->file('torrent_file')->getClientOriginalName();
            // Get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // Get just ext
            $extention = $request->file('torrent_file')->getClientOriginalExtension();
            // File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            // Upload Torrent
            $path = $request->file('torrent_file')->storeAs('public/torrent_files',$fileNameToStore);

        }else{
            $fileNameToStore = '';
        }

        $movie->torrent_file = $fileNameToStore;

        $movie->save();
        
        return redirect(route('addmovie'))->with('success','Movie Stored...');
    }

    public function updatemovie(){
        
        return view('pages.backend.movies.editmovie')->with('title',$title);
    }

}
