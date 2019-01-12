<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="FlixZone";
        return view('pages.frontend.index')->with('title',$title);
    }

    public function contact(){
        $title="Contact";
        return view('pages.frontend.contact')->with('title',$title);
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
        $title="Dashboard";
        return view('pages.backend.dashboard.dashboard')->with('title',$title);
    }

    public function changepassword(){
        $title="Change Password";
        return view('pages.backend.changepassword.changepassword')->with('title',$title);
    }
 
}
