<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialLink;

class SociallinksController extends Controller
{
    public function sociallinks(){
        $title="Manage Social Links";
        $social = SocialLink::find(1);
        return view('pages.backend.social.social')->with('title',$title)->with('social',$social);
    }

    public function update_social_links(Request $request){
        
        $this->validate(request(), [

            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
        
        ]);
            
        // Update Social Links

        $sociallink= SocialLink::find(1);
        $sociallink->facebook = $request->input('facebook');
        $sociallink->twitter = $request->input('twitter');
        $sociallink->instagram = $request->input('instagram');
        $sociallink->save();

        return redirect(route('sociallinks'))->with('success','Social Links Updated...');

    }

}
