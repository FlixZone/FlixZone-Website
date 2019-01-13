<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Poster;

class PostersController extends Controller
{
    // Pages Controllers
    public function addposter(){
        $title="Add Poster";
        return view('pages.backend.posters.addposter')->with('title',$title);
    }

    public function editposter($id=NULL){

        if($id)
        {

            $title="Edit Poster";
            $poster = Poster::find($id);
            return view('pages.backend.posters.editposter')->with('title',$title)->with('poster',$poster);

        }
        else{
            return redirect()->route('pages.backend.posters.viewposters')->with('error','Perameter is missing. Try again...');
        }
        
    }

    public function viewposters(){
        $posters = Poster::all();
        //dd($posters);
        $title="View posters";
        return view('pages.backend.posters.viewposters')->with('posters',$posters)->with('title',$title);
    }

    // Actions Controllers
    public function storeposter(Request $request){
        $this->validate(request(), [
            'movie_name' => 'required',
            'poster' => 'required|image|max:1999',
        ]);

        $title='Add Poster';

        // Add Poster
        $poster= new Poster;
        $poster->name = $request->input('movie_name');

        // Handle Poster Upload

        if($request->hasFile('poster')){
            // File Name With Extention
            $filenameWithExt=$request->file('poster')->getClientOriginalName();
            // Get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // Get just ext
            $extention = $request->file('poster')->getClientOriginalExtension();
            // File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            // Upload Torrent
            $path = $request->file('poster')->storeAs('public/poster_files',$fileNameToStore);

        }

        $poster->poster = $fileNameToStore;

        $poster->save();
        
        return redirect(route('addposter'))->with('success','Poster Stored...');
    }

    public function updateposter(Request $request, $id=NULL){
        if($id)
        {
            $this->validate(request(), [
                'movie_name' => 'required',
                'poster' => 'image|nullable|max:1999',
            ]);
    
            // Update Movie
            $poster= Poster::find($id);
            $poster->name = $request->input('movie_name');
    
            // Handle Poster Upload
    
            if($request->hasFile('poster')){
                // File Name With Extention
                $filenameWithExt=$request->file('poster')->getClientOriginalName();
                // Get just file name
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                // Get just ext
                $extention = $request->file('poster')->getClientOriginalExtension();
                // File name to store
                $fileNameToStore = $filename.'_'.time().'.'.$extention;
                // Upload Torrent
                $path = $request->file('poster')->storeAs('public/poster_files',$fileNameToStore);
    
            }

            if($request->hasFile('poster') &&  $poster->poster != ''){
                // Delete Old Poster file
                Storage::delete(getenv('APP_PATH_POSTER').'/'.$poster->poster);
            }

            // Update Poster file if and only if user wrote it

            if($request->hasFile('poster')){
                $poster->poster = $fileNameToStore;
            }

            $poster->save();
    
            return redirect(route('viewposters'))->with('success','Poster Updated...');

        }
        else{
            return redirect()->route('viewposters')->with('error','Perameter is missing. Try again');
        }
    }
    
    public function deleteposter($id=NULL){
        if($id)
        {
            // Delete Poster
            $poster= Poster::find($id);
            // Delete Torrent File
            Storage::delete(getenv('APP_PATH_POSTER').'/'.$poster->poster);

            $poster->delete();    
            return redirect(route('viewposters'))->with('error','Poster Deleted...');
        }
        else{
            return redirect()->route('viewposters')->with('error','Perameter is missing. Try again...');
        }
    }
}
