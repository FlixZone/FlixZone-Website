<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MegaAccountsController extends Controller
{
    public function addmegaaccount(){
        $title="Add Mega Account";
        return view('pages.backend.mega-accounts.addmega')->with('title',$title);
    }

    public function editmegaaccount(){
        $title="Edit Mega Account";
        return view('pages.backend.mega-accounts.editmega')->with('title',$title);
    }

    public function viewmegaaccounts(){
        $title="View Mega Accounts";
        return view('pages.backend.mega-accounts.viewmega')->with('title',$title);
    }
}
