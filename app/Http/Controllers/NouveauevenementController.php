<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;

use App\Mail\EpisenMail;
use App\User;
use DateTime;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class NouveauevenementController extends Controller
{
    public function index(){

        return view('Nouveauevenement');
  
    }

    
    public function Post(Request $request){
        
        // dd($request->Nom_evenement);
        
        // $table->bigIncrements('id');
        // $table->integer('Organisateur');
        // $table->string('Nom_evenement');
        // $table->string('Emplacement');
        // $table->string('Salle');
        // $table->string('Type');
        // $table->integer('Nb_participants');
        // $table->date('date_evenement');
        // $table->string('Commentaire');
        // $table->string('Adresse');
        // $table->string('Ville');
        // $table->timestamps();


        $evenement=new Evenement();
        // $input = $request->all();
        $evenement->Nom_evenement=$request->Nom_evenement;
        // $evenement->Emplacement=$request->exampleRadios;
        $evenement->Salle=$request->salle;
        $evenement->Adresse=$request->user_input_autocomplete_address;
        $evenement->Ville=$request->locality;
        $evenement->Type=$request->Type_evenement;
        $evenement->Nb_participants=$request->nb_participants;
        $evenement->Nb_participants_R=$request->nb_participants;
        $evenement->date_evenement=$request->date;
        $evenement->Commentaire=$request->commentaire;
        $evenement->Organisateur=$request->orga;

        
        
       
        
        if(date("Y-m-d H:i:s")>=$evenement->date_evenement){

            session()->flash('message',"Veuillez verifier la date");


        }else{

       

            if($request->exampleRadios=="red"){
                $evenement->Emplacement="EPISEN" ;
                $evenement->Adresse="EPISEN";
                $user=Auth::user();

                $this->mail($evenement,$user);
               
                session()->flash('message1',"Evenement à l'ecole bien enregistré");
                $evenement->save();
            }else{
                if($request->user_input_autocomplete_address==""){
                    // dd("khra");
                    session()->flash('message',"Veuillez saisir votre adresse");

                }else{
                    $evenement->Emplacement="Dehors de l'EPISEN" ;
                    $evenement->Salle="";
                    session()->flash('message1',"Evenement bien enregistré");
                    $evenement->save();
                }
            
            }
        }

        

        
        return view('Nouveauevenement');
  
    }

    public function mail($evenement,$user){
        
        Mail::to('scolarite.episen@u-pec.fr')->send(new EpisenMail($evenement,$user));
        
        return view('Nouveauevenement');
    }

    
}
