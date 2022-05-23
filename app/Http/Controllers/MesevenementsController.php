<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Evenement;

use Illuminate\Http\Request;

class MesevenementsController extends Controller
{
   
    public function index(){
        //$allevens=Evenement::all();
        // 
        

        // dd($evens);
        return view('Mesevenements');
  
    }
}
