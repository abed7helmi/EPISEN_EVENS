@extends('layouts.app')

@section('content')

<h1>Les Participants à l'evenement {{$even->Nom_evenement}}</h1>

<div class="container" style="margin-top: 50px">
  
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            
            <th scope="col">Nom</th>
            <th scope="col">Contact</th>
            <th scope="col">Num Tel</th>
            <th scope="col">Adresse</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($parts as $x)
          <tr>
            
            <td><img src="{{url('/uploads/comptes/'.$x->photo)}}"  class="pdpcomptenav" alt=""/>&nbsp;{{$x->name}}</td>
            <td>{{$x->email}}</td>
            <td>{{$x->tel}}</td>
            <td>{{$x->adresse}}</td>
          </tr>
        @endforeach
        </tbody>
    </table>

</div>



@endsection