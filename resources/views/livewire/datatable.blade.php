<div>
    <div class="col-lg-12 col-md-12 col-sm-12">


        <div class="row mb-4">
            <div class="col form-inline">
                Par Page: &nbsp;
                <select wire:model="perPage" class="form-control">
                    <option>2</option>
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                    <option>25</option>
                </select>
            </div>
    
            <div class="col">
                <input wire:model.debounce.300ms="search" class="form-control" type="text" placeholder="chercher...">
            </div>
    
        </div>


        <div class="table-responsive" style="margin-bottom: 30px;">
            <table class="table table-hover js-basic-example dataTable table-custom mb-0">
    
              <thead class="thead-white">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Organisateur</th>
                    <th>Nom Evenement</th>
                    <th>Type</th>
                    <th>Nb participants</th>
                    <th>Nb participants Restants</th>
                    <th>Adresse</th>
                    <th>Date</th>
    
                </tr>
              </thead>
              <tbody>
              @foreach ($allevens as $x)


              
              {{-- @if ($x->organisateur->name!=Auth::user()->name) --}}
                  
              
              {{-- {{dd($x->organisateur->name)}} --}}
              @if ($x->organisateur->name=='BDS')
              <tr class="table-primary">
              @elseif ($x->organisateur->name=='BDE')
              <tr class="table-success">
              @else
              <tr>
              @endif
                  {{-- <td>{{$vlan->t_port->t_vlan->t_ref_vlan->Nom_Vlan}}</td> --}}
    
                  <td>
                      {{-- <i class="bi bi-pencil"></i> --}}
                      {{-- {{route('clm.detailvlan',['id'=>$vlan->Id_CLM])}} --}}
                      {{-- <a class="btn btn-outline-success btn-sm details-demande" type="button" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                          <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg></a> --}}
                        

                        @if ($x->organisateur->name==Auth::user()->name)
                            <p style="color: red;">Organisateur</p>
                        @elseif($x->Nb_participants_R==0)
                            <p style="color: red;">Complet</p>
                        @elseif(in_array($x->id,$allparttable))
                            <p style="color: green;">Participé</p>
                        @elseif(Auth::user()->name=='BDS' || Auth::user()->name=='BDE')
                            <p style="color: green;"><small>Vous pouvez pas participer en tant que groupe</small></p>
                        @else
                            <a class="btn btn-outline-success btn-sm details-demande" type="button" href="{{route('participer',['id'=>$x->id])}}"><div style="size: 5px">Participer</div></a>
                        @endif
                       
                  </td>


                  <td><a class="btn btn-outline-success btn-sm details-demande" type="button" href="{{route('MesParticipants',['id'=>$x->id])}}"><div style="size: 5px">Voir Participants</div></a></td>

                  {{-- {{dd($x)}} --}}
                  <td>
                    {{-- <i class="bi bi-pencil"></i> --}}
                    {{-- {{route('clm.detailvlan',['id'=>$vlan->Id_CLM])}} --}}
                    {{-- <a class="btn btn-outline-success btn-sm details-demande" type="button" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg></a> --}}


                      <a class="btn btn-outline-success btn-sm details-demande" type="button" href="{{route('clm.detaileven',['id'=>$x->id])}}">Detail</a>


                </td>

                  <td>{{$x->organisateur->name}}</td>
                  <td>{{$x->Nom_evenement}}</td>
                  <td>{{$x->Type}}</td>
                  <td>{{$x->Nb_participants}}</td>
                  <td>{{$x->Nb_participants_R}}</td>
                  <td>{{$x->Adresse}}</td>
                  <td>{{$x->date_evenement}}</td>
    
    
                  {{-- <td>{{$vlan->Nom_evenement}}</td>
                  <td>{{$vlan->Type}}</td>
                  <td>{{$vlan->Nb_participants}}</td>
                  <td>{{$vlan->Adresse}}</td>
                  <td>{{$vlan->date_evenement}}</td> --}}
    
    
              </tr>
              {{-- @endif --}}
              @endforeach
              </tbody>
    
    
    
            </table>
            <div>
                <p>
                    Affichage de {{$allevens->firstItem()}} à {{$allevens->lastItem()}} de total {{$allevens->total()}} Evenements
                </p>


                <p>
                    {{$allevens->links()}}
                </p>
            </div>
        </div>
      </div>
</div>
