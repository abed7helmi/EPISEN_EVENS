<?php

namespace App\Http\Controllers;

use App\Evenement;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    //

    public function index(){
        
        // dd($allevens);
        // // 
        // $evens=Evenement::where('Organisateur',Auth::user()->id)->get();

        // // dd($evens);
        return view('AcceuilEpisen');
  
    }
}
