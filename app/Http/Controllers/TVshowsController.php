<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\TVshow;

class TVshowsController extends Controller
{
    // Pages Controllers
    public function addtvshow(){
        $title="Add TV Show";
        return view('pages.backend.tvshows.addtvshow')->with('title',$title);
    }

    public function edittvshow($id=NULL){
        if($id)
        {

            $title="Edit TV Show";
            $tvshow = TVshow::find($id);
            return view('pages.backend.tvshows.edittvshow')->with('title',$title)->with('tvshow',$tvshow);

        }
        else{
            return redirect()->route('pages.backend.tvshows.edittvshow')->with('error','Perameter is missing. Try again...');
        }
        
    }

    public function viewtvshows(){
        $tvshows = TVshow::all();
        //dd($tvshows);
        $title="View TV Shows";
        return view('pages.backend.tvshows.viewtvshows')->with('tvshows',$tvshows)->with('title',$title);
    }

    // Action Controllers

    public function storetvshow(Request $request){

        $this->validate(request(), [
            
            'the_movie_db_id' => 'required',
            'tv_show_name' => 'required',
            'season' => 'required',
            'episode' => 'required',
            'mega_link' => 'required',
            'mega_key' => 'required',
            'torrent_file' => 'nullable|mimes:torrent',
        ]);

        $title='Add TVshow';

        // Add TVshow
        $tvshow= new TVshow;
        $tvshow->the_movie_db_id = $request->input('the_movie_db_id');
        $tvshow->name = $request->input('tv_show_name');
        $tvshow->season = $request->input('season');
        $tvshow->episode = $request->input('episode');
        $tvshow->mega_link = $request->input('mega_link');
        $tvshow->mega_key = $request->input('mega_key');

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
            $path = $request->file('torrent_file')->storeAs('public/tvshow_torrents',$fileNameToStore);

        }else{
            $fileNameToStore = '';
        }

        $tvshow->torrent_file = $fileNameToStore;

        $tvshow->save();
        
        return redirect(route('addtvshow'))->with('success','TVshow Stored...');
    }

    public function updatetvshow(Request $request, $id=NULL){

        if($id)
        {
            $this->validate(request(), [
            
            'the_movie_db_id' => 'required',
            'tv_show_name' => 'required',
            'season' => 'required',
            'episode' => 'required',
            'mega_link' => 'required',
            'mega_key' => 'required',
            'torrent_file' => 'nullable|mimes:torrent',
            ]);
    
            // Update TVshow
            $tvshow= TVshow::find($id);
            $tvshow->the_movie_db_id = $request->input('the_movie_db_id');
            $tvshow->name = $request->input('tv_show_name');
            $tvshow->season = $request->input('season');
            $tvshow->episode = $request->input('episode');
            $tvshow->mega_link = $request->input('mega_link');
            $tvshow->mega_key = $request->input('mega_key');
    
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
                $path = $request->file('torrent_file')->storeAs('public/tvshow_torrents',$fileNameToStore);
    
            }

            if($request->hasFile('torrent_file') &&  $tvshow->torrent_file != ''){
                // Delete Old Torrent file
                Storage::delete(getenv('APP_PATH_TVSHOW_TORRENT').'/'.$tvshow->torrent_file);
            }

            // Update Torrent file if and only if user wrote it

            if($request->hasFile('torrent_file')){
                $tvshow->torrent_file = $fileNameToStore;
            }

            $tvshow->save();
    
            return redirect(route('viewtvshows'))->with('success','TVshow Updated...');

        }
        else{
            return redirect()->route('viewtvshows')->with('error','Perameter is missing. Try again');
        }
    }

    public function deletetvshow($id=NULL){

        if($id)
        {
            // Delete TVshow
            $tvshow= TVshow::find($id);
            // Delete Torrent File
            Storage::delete(getenv('APP_PATH_TVSHOW_TORRENT').'/'.$tvshow->torrent_file);

            $tvshow->delete();    
            return redirect(route('viewtvshows'))->with('error','TVshow Deleted...');
        }
        else{
            return redirect()->route('viewtvshows')->with('error','Perameter is missing. Try again...');
        }
    
    }
}
