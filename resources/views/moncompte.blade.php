@extends('layouts.app')

@section('content')






<div class="container">
    <div class="divimagecenter">
        <img src="{{url('/uploads/comptes/'.Auth::user()->photo)}}"  class="pdpcompte" alt="Ajouter photo de profile"/>
    </div>
    
    <div class="card">
        <div class="card-header">
          Mon Compte
        </div>
        <div class="card-body">
            <form action="/updatecompte" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="photo" value="{{ Auth::user()->photo}}">
                <div class="row col-lg-12 col-md-12 espace">
                    <div class="col-lg-4 col-md-4">
                        <label>NOM PRENOM</label>
                        <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <label>EMAIL</label>
                        <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <label>SURNOM</label>
                        <input type="text" name="surname" class="form-control" value="{{ Auth::user()->surnom }}">
                    </div>
                </div>

                <div class="row col-lg-12 col-md-12 espace">
                    <div class="col-lg-6 col-md-6">
                        <label>TEL</label>
                        <input type="tel" name="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" class="form-control" value="{{ Auth::user()->tel }}">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label>ADRESSE</label>
                        <input type="text" name="adresse" class="form-control" value="{{ Auth::user()->adresse}}">
                    </div>

                </div>

                <div class="row col-lg-12 col-md-12 espace">
                    <div class="col">
                        <label>PHOTO DE PROFILE</label>
                        <input type="file" class="form-control" name="pdp">
                    </div>

                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">enregistrer</button>
                </div>

            </form>
        </div>
    </div>
</div>


 







    
       









@endsection