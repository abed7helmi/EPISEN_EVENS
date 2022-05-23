@extends('layouts.app')

@section('content')

<h1>Mes Participations</h1>
<div class="container" style="margin-top: 50px">
  
    <table class="table table-responsive-sm table-striped table-dark">
        <thead>
          {{-- {{dd($allpart)}} --}}
          <tr>
            <th scope="col">Action</th>
            {{-- <th scope="col">Organisateur</th> --}}
   
            <th scope="col">Evenement</th>
            <th scope="col">Adresse</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($allpart as $x)
          <tr>
            <td style="display: flex;align-content: padding: 5px;"><a class="btn btn-outline-success btn-sm details-demande" style="margin: 5px; " type="button" href="{{route('clm.detaileven',['id'=>$x->id])}}">Detail</a>
            <a class="btn btn-outline-success btn-sm details-demande" style="margin: 5px; " type="button" href="{{route('MesParticipants',['id'=>$x->id])}}"><div style="size: 5px">Voir Participants</div></a>
            <a class="btn btn-outline-danger btn-sm details-demande" style="margin: 5px; " type="button" href="{{route('annulerpart',['id'=>$x->id])}}">Annuler</a></td>
            {{-- <td>{{$x->organisateur->name}}</td> --}}
            <td>{{$x->Nom_evenement}}</td>
            <td>{{$x->Adresse}}</td>
          </tr>
        @endforeach
        </tbody>
    </table>

</div>




@endsection