<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PagesController extends Controller
{
    public function index(){
        $title="FlixZone";
        return view('pages.frontend.index')->with('title',$title);
    }

    public function contact(Request $request){
        
        if($request['email'] && $request['reason'] && $request['message']){
           
           $email = 'vasuratanpara@gmail.com';
           
           $data = array(
                'email'=>$request['email'],
                'reason'=>$request['reason'],
                'message'=>$request['message']
           );

            Mail::to($email)->send(new ContactMail($data));

            return redirect(route('index'))->with('success','Success ! Message sent.');
       }else {
            return redirect(route('index'))->with('error','Try again ! Message did not send.');
       }
       
    }

    public function login(){
        $title="Login";
        return view('pages.frontend.signin')->with('title',$title);
    }

    public function forgetpassword(){
        $title="Forget password";
        return view('pages.frontend.forgetpassword')->with('title',$title);
    }

    public function dashboard(){

        $user = DB::table('users')->where('type',0)->count();
        $movie = DB::table('movies')->count();
        $tvshow = DB::table('tvshows')->select('name')->distinct()->get()->count();
        $mega = DB::table('mega-accounts')->select('email')->distinct()->get()->count();
        // Retriving User Profile
        $profile = User::find(Auth::user()->id);

        $data = [
            "user" => $user,
            "movie" => $movie,
            "tvshow" => $tvshow,
            "mega" => $mega,
        ];

        $title="Dashboard";
        return view('pages.backend.dashboard.dashboard')->with('profile',$profile)->with('data',$data)->with('title',$title);
    }

    public function changepassword(){
        $title="Change Password";
        return view('pages.backend.changepassword.changepassword')->with('title',$title);
    }
 
}
