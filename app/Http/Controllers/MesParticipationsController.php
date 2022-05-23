<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Evenement;

class MesParticipationsController extends Controller
{
    public function index(){

        $id2=Auth::user()->id;

        $allpart = DB::table('participation')
                    ->leftJoin('evenements', 'participation.evenement_id', '=', 'evenements.id')
                    ->select('evenements.Nom_evenement','evenements.Adresse','evenements.id')
                    ->where('participation.user_id','=',$id2)
                    ->get();

        // dd($allpart);


        return view('participation',compact('allpart'));
  
    }

    


    public function annulerpart($id){

        $id2=Auth::user()->id;

        DB::table('participation')
            ->where('participation.evenement_id', '=', $id)
            ->where('participation.user_id', '=', $id2)
            ->delete();



        $even=Evenement::find($id);
        
        $even->update([
                'Nb_participants_R'=>($even->Nb_participants_R)+1
        ]);


        session()->flash('message1','Participation annulé');
        return redirect()->route('MesParticipations'); 
  
    }
}
