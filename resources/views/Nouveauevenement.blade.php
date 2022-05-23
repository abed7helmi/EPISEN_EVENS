@extends('layouts.app')

@section('content')


{{-- type="text/javascript" --}}
<!-- Include Google Maps JS API -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyCGsFtqWDkHH4JYmOui4b2vmnaSVL40OoI "></script>

{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGsFtqWDkHH4JYmOui4b2vmnaSVL40OoI&libraries=places" async defer></script> --}}

<!-- Custom JS code to bind to Autocomplete API -->
<script type="text/javascript" src="/js/autocomplete.js"></script>




<h1>Créer un nouvel evenement</h1>
<div class="container">
  <form role="form" action="/evenements" method='POST'>
    @csrf
    <div class="row col-lg-12 col-md-12 padddinghelmi">

      <div class="col-lg-6 col-md-6">
        <label>Nom evenement :</label>
        <input type="text" class="form-control" name="Nom_evenement" required>
                              
      </div>

      <div class="col-lg-3 col-md-3">
        <div class="divcss">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="red">
          <label>Episen :</label>
        </div>
                              
      </div>

      <div class="col-lg-3 col-md-3">
        <div class="divcss">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="green">
          <label>Autre adresse :</label>
        </div> 
                              
      </div>

    </div>


    <div class="row col-lg-12 col-md-12 red box padddinghelmi " id="div1">
      <div class="col-lg-12 col-md-12">
        <label>Salle:</label>
        <select id="salle" class="custom-select" name="salle" size="5">
          <option value="GAMIXLAB" selected>GAMIXLAB</option>
          <option value="TD1">TD1</option>
          <option value="TD2">TD2</option>
          <option value="TD3">TD3</option>
          <option value="TD4">TD4</option>
          <option value="TD5">TD5</option>
          <option value="INFO1">INFO1</option>
          <option value="INFO2">INFO2</option>
          <option value="INFO3">INFO3</option>
          <option value="INFO4">INFO4</option>
          <option value="INFO5">INFO5</option>
        </select>
                              
      </div>
    </div>


    <div class="row col-lg-12 col-md-12 green box padddinghelmi" id="div2">
      
        <fieldset>
            <div class="form-group">
            <label class="control-label">Address</label>
            <div class="col-sm-8">
              <input id="user_input_autocomplete_address" name="user_input_autocomplete_address"
                      class="form-control" placeholder="tapez l'adresse...">
            </div>
          </div>
          {{-- <input id="locality2" name="locality2" value="17" class="form-control" hidden> --}}
        </fieldset>

        <fieldset class="disabled">
          <div class="form-group">
            <label class="control-label"><code>numéro</code></label>
            <div class="col-sm-8">
              <input id="street_number" name="street_number" disabled="true" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label"><code>avenue</code></label>
            <div class="col-sm-8">
              <input id="route" name="route" disabled="true" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label"><code>ville</code></label>
            <div class="col-sm-8">
              <input id="locality" name="locality" class="form-control">
              {{-- <input id="locality" name="locality" class="form-control" disabled> --}}
              
            </div>
          </div>
          <div class="form-group">
            <label class="control-label"><code>région</code></label>
            <div class="col-sm-8">
              <input id="administrative_area_level_1" name="administrative_area_level_1" disabled="true" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label"><code>code postale</code></label>
            <div class="col-sm-8">
              <input id="postal_code" name="postal_code" disabled="true" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label"><code>Pays</code></label>
            <div class="col-sm-8">
              <input id="country" name="country" disabled="true" class="form-control">
            </div>
          </div>
        </fieldset>
          
    </div>  

    <div class="row col-lg-12 col-md-12 padddinghelmi">
      <div class="col-lg-4 col-md-4" >
        <label class="test">Type evenement:</label>
        <select id="salle" class="custom-select" name="Type_evenement">
          <option value="Sportif" selected>Sportif</option>
          <option value="Culturel">Culturel</option>
          <option value="Autre">Autre</option>
        </select> 
      </div>


      <div class="col-lg-4 col-md-4" >
        <label>Nombre de participants:</label>
        {{-- <label for="tentacles">Number of tentacles (10-100):</label> --}}

        <input type="number" class="form-control" min="1" max="100" name="nb_participants" required>
      </div>







      
      <div class="col-lg-4 col-md-4" > 
        <label>Date et l'heure de l'evenement</label>
        <div class="form-group row">
            <div class="col-10">
                {{-- <input class="form-control" type="date" value="{{$d1 ?? ''}}"> --}}
                {{-- <input class="form-control" type="date" > --}}
                <input class="form-control" type="datetime-local" name="date" required >
            </div>
        </div>
      </div>



    </div>





    
    <div class="row col-lg-12 col-md-12 padddinghelmi">
      
        <div class="col">
            <div class="form-group">
                <label for="Commentaire">Commentaire</label>
                <textarea class="form-control" id="Commentaire" rows="3" name="commentaire"></textarea>
            </div>
        </div>

      
    </div>

    

    <input id="orga" name="orga" class="form-control" value={{ Auth::user()->id }} hidden>
     
    
    <center><button type="submit" class="btn btn-primary">Enregistrer</button></center>
    
    
    
  </form>
</div>



  @endsection