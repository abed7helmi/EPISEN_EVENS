@extends('layouts.app')

@section('content')










<h1>Detail evenement : {{$even->Nom_evenement}}</h1>
<div class="container">

  <div class="row col-lg-12 col-md-12 padddinghelmi">
    <div class="col-lg-4 col-md-4">
      Etudiant Organisateur : {{$even->organisateur->name}}
    </div>

    <div class="col-lg-4 col-md-4">
      Nom evenement : {{$even->Nom_evenement}}
    </div>

    <div class="col-lg-4 col-md-4">
      Type : {{$even->Type}}
    </div>

    

    


  </div>

  <hr>




  <div class="row col-lg-12 col-md-12 padddinghelmi">
    <div class="col-lg-4 col-md-4">
      Nombre de participants : {{$even->Nb_participants}}
    </div>

    <div class="col-lg-4 col-md-4">
      Date de l'evenement : {{$even->date_evenement}}
    </div>

 

    

    


  </div>

  <hr>






  <div class="row col-lg-12 col-md-12 padddinghelmi">
    <div class="col-lg-4 col-md-4">
      Adresse : {{$even->Adresse}}
    </div>

    @if ($even->Adresse=="EPISEN")
        <div class="col-lg-4 col-md-4">
          Salle : {{$even->Salle}}
        </div>

    @else

      <div class="col-lg-4 col-md-4">
        Ville : {{$even->Ville}}
      </div>

    @endif




    

    


  </div>

  <hr>

  <div class="row col-lg-12 col-md-12 padddinghelmi">

    <label for="Commentaire">Commentaire</label>
    <textarea class="form-control" id="Commentaire" rows="3" name="commentaire" disabled>{{$even->Commentaire}}</textarea>

  </div>




  
   




 
</div>



@endsection