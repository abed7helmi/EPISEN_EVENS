<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;



class EvenementController extends Controller
{
    //detaileven
    public function detaileven($id)
    {
        $even=Evenement::with('organisateur')->where("id","=",$id)->get();
        $even=$even[0];
        // dd($even);
        return view('detailevenement',compact('even'));

    }

    
    public function deleteeven($id)
    {


        DB::table('participation')->where('evenement_id', '=', $id)->delete();

        $even=Evenement::find($id);
        $even->delete();
        session()->flash('message1','Votre evenement a été bien supprimé');
        return redirect()->route('Mesevenements'); 

    }


    public function MesParticipants($id){  
        
        $parts= DB::table('participation')
            ->leftJoin('users', 'users.id', '=', 'participation.user_id')
            ->select('name','email','photo','tel','adresse')
            ->where('participation.evenement_id','=',$id)
            ->get();


            // select U."name",U."email" from "participation" Per left join "users" U on  Per."user_id"=U."id"
            // where Per."evenement_id"=3 ;

        // dd($parts);
        $even=Evenement::find($id);
        // dd($even);
        return view('MesParticipants',compact('parts','even'));
    }



    public function participereven($id)
    {

        $even=Evenement::find($id);
        $id2=Auth::user()->id;
        


        try {
            DB::table('participation')->insert([
                'user_id' => $id2,
                'evenement_id' => $id
            ]);
        } catch (\Exception $e) {
            

            session()->flash('message','Vous participer deja à cette evenement');
            return redirect()->route('acceuil'); 
            
        }

       
        // dd("waaw",$even->Nb_participants_R-1);
        $even->update([
            'Nb_participants_R'=>$even->Nb_participants_R-1
        ]);


        session()->flash('message1','Participation prise en compte');
        return redirect()->route('acceuil'); 

        
    }




    




}
