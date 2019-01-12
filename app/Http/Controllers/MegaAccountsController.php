<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MegaAccount;

class MegaAccountsController extends Controller
{
    // Pages Controllers

    public function addmegaaccount(){
        $title="Add Mega Account";
        return view('pages.backend.mega-accounts.addmega')->with('title',$title);
    }

    public function editmegaaccount($id=NULL){

        if($id)
        {

            $title="Edit Mega Account";
            $mega = MegaAccount::find($id);
            return view('pages.backend.mega-accounts.editmega')->with('title',$title)->with('mega',$mega);

        }
        else{
            return redirect()->route('pages.backend.mega-accounts.viewmega')->with('error','Perameter is missing. Try again...');
        }

    }

    public function viewmegaaccounts(){

        $megas = MegaAccount::all();
        //dd($megas);
        $title="View Mega Accounts";
        return view('pages.backend.mega-accounts.viewmega')->with('megas',$megas)->with('title',$title);
    
    }

    // Action Controllers

    public function storemegaaccount(Request $request){

        $this->validate(request(), [
            
            'file_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'recovery_key' => 'required',
        ]);

        $title='Add Mega';

        // Add Mega
        $mega= new MegaAccount;
        $mega->file_name = $request->input('file_name');
        $mega->email = $request->input('email');
        $mega->password = $request->input('password');
        $mega->recovery_key = $request->input('recovery_key');

        $mega->save();
        
        return redirect(route('addmega'))->with('success','Mega Account Stored...');
    }

    public function updatemegaaccount(Request $request, $id=NULL){

        if($id)
        {
            $this->validate(request(), [
            
                'file_name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'recovery_key' => 'required',
            ]);
    
            // Update Movie
            $mega= MegaAccount::find($id);
            $mega->file_name = $request->input('file_name');
            $mega->email = $request->input('email');
            $mega->password = $request->input('password');
            $mega->recovery_key = $request->input('recovery_key');
            $mega->save();
    
            return redirect(route('viewmega'))->with('success','Mega Account Updated...');

        }
        else{
            return redirect()->route('viewmega')->with('error','Perameter is missing. Try again...');
        }
    }

    public function deletemegaaccount($id=NULL){

        if($id)
        {
            // Delete Mega Account
            $mega= MegaAccount::find($id);
            $mega->delete();    
            return redirect(route('viewmega'))->with('error','Mega Account Deleted...');
        }
        else{
            return redirect()->route('viewmega')->with('error','Perameter is missing. Try again...');
        }
    
    }

}