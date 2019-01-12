<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsersController extends Controller
{
    public function authenticate(Request $request)
    {
        //$credentials = $request->only('email', 'password');

        $email = request('email');
        $password = request('password');
        
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
        
            if(Auth::user()->type == 0)
            {
                return redirect()->route('login')->with('error','You are only not allowed to login here only admin are allowed to login here user should login in App...');
            }
            if(Auth::user()->type == 1)
            {
                return redirect()->route('dashboard')->with('success','Logged in successfully...');
            }
        }
        else{
            return redirect()->back()->with('error','Error');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try
        {
            $title='Signup';
            return view('pages.backend.signup')->with('title',$title);
        }
        catch(\Exception $e)
        {
            return redirect()->back()->withErrors($e->getMessage());
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validate(request(), [
            
            'name' => 'required|string',
            'email' => 'required|email',
            'password'=>'required',
            'conform_password'=>'required|same:password',
            'profile_image'=> 'image|nullable|max:1999',

        ]);

        $user = new User;
        
        //dd($request);
        
        $user->name = request('name');
        $user->email = request('email');
        $user->type = 0;
        $user->password = Hash::make($request->password);
        
        // Handle Image Upload

        if($request->hasFile('profile_image')){
            // File Name With Extention
            $filenameWithExt=$request->file('profile_image')->getClientOriginalName();
            // Get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // Get just ext
            $extention = $request->file('profile_image')->getClientOriginalExtension();
            // File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            // Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile_images',$fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $user->profile_image = $fileNameToStore;
    
        $user->save();

        return redirect('/login')->with('success','registration done successfully...');
    }

}