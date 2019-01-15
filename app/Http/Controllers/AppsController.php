<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\App;

class AppsController extends Controller
{
    // Pages Controllers
    public function addapp(){
        $title="Add App";
        return view('pages.backend.apps.addapp')->with('title',$title);
    }

    public function editapp($id=NULL){

        if($id)
        {

            $title="Edit App";
            $app = App::find($id);
            return view('pages.backend.apps.editapp')->with('title',$title)->with('app',$app);

        }
        else{
            return redirect()->route('pages.backend.apps.viewapps')->with('error','Perameter is missing. Try again...');
        }
        
    }

    public function viewapps(){
        $apps = App::all();
        //dd($apps);
        $title="View apps";
        return view('pages.backend.apps.viewapps')->with('apps',$apps)->with('title',$title);
    }

    // Actions Controllers
    public function storeapp(Request $request){
        $this->validate(request(), [
            'plateform' => 'required',
            'version' => 'required',
            'app' => 'required',
        ]);

        $title='Add App';

        //dd($request->file('app'));
        
        // Add App
        $app= new App;
        $app->plateform = $request->input('plateform');
        $app->version = $request->input('version');

        // Handle App Upload

        if($request->hasFile('app')){
            // File Name With Extention
            $filenameWithExt=$request->file('app')->getClientOriginalName();
            // Get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // Get just ext
            $extention = $request->file('app')->getClientOriginalExtension();
            // File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            // Upload App
            $path = $request->file('app')->storeAs('public/apps',$fileNameToStore);

        }else{
            $fileNameToStore = '';
        }

        $app->path = $fileNameToStore;

        $app->save();
        
        return redirect(route('addapp'))->with('success','App Stored...');
    }

    public function updateapp(Request $request, $id=NULL){
        if($id)
        {
            $this->validate(request(), [
                'plateform' => 'required',
                'version' => 'required',
                'app' => 'nullable',
            ]);
    
            // App Movie
            $app= App::find($id);
            $app->plateform = $request->input('plateform');
            $app->version = $request->input('version');
    
            // Handle App Upload
    
            if($request->hasFile('app')){
                // File Name With Extention
                $filenameWithExt=$request->file('app')->getClientOriginalName();
                // Get just file name
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                // Get just ext
                $extention = $request->file('app')->getClientOriginalExtension();
                // File name to store
                $fileNameToStore = $filename.'_'.time().'.'.$extention;
                // Upload App
                $path = $request->file('app')->storeAs('public/apps',$fileNameToStore);
    
            }

            if($request->hasFile('app') &&  $app->app != ''){
                // Delete Old App file
                Storage::delete(getenv('APP_PATH_APP').'/'.$app->app);
            }

            // Update App file if and only if user wrote it

            if($request->hasFile('app')){
                $app->path = $fileNameToStore;
            }

            $app->save();
    
            return redirect(route('viewapps'))->with('success','App Updated...');

        }
        else{
            return redirect()->route('viewapps')->with('error','Perameter is missing. Try again');
        }
    }
    
    public function deleteapp($id=NULL){
        if($id)
        {
            // Delete App
            $app= App::find($id);
            // Delete App File
            Storage::delete(getenv('APP_PATH_APP').'/'.$app->path);

            $app->delete();    
            return redirect(route('viewapps'))->with('error','App Deleted...');
        }
        else{
            return redirect()->route('viewapps')->with('error','Perameter is missing. Try again...');
        }
    }

    // Download Apps

    public function android(){
        // Download App
        $app= App::where('plateform','Android')->distinct()->get()->first();
        if(!empty($app)){
            return response()->download(storage_path("app/public/apps/{$app->path}"));
        }else{
            return redirect()->back()->with('error','App is not avilable on server yet...');
        } 
       
    }
    
    public function iphone(){
        // Download App
        $app= App::where('plateform','iphone')->distinct()->get()->first(); 
        if(!empty($app)){
            return response()->download(storage_path("app/public/apps/{$app->path}"));
        }else{
            return redirect()->back()->with('error','App is not avilable on server yet...');
        }
    }

    public function windows(){
        // Download App
        $app= App::where('plateform','windowsphone')->distinct()->get()->first(); 
        if(!empty($app)){
            return response()->download(storage_path("app/public/apps/{$app->path}"));
        }else{
            return redirect()->back()->with('error','App is not avilable on server yet...');
        }
    }
}
