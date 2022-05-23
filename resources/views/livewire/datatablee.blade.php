<div>
    <div class="row col-lg-12 col-md-12 padddinghelmi">

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
{{--     
            <div class="col">
                <input wire:model.debounce.300ms="search" class="form-control" type="text" placeholder="chercher...">
            </div> --}}
    
        </div>



        <table class="table table-responsive-sm table-striped table-hover js-basic-example table-custom mb-0">
            <thead class="thead-white">
                <tr>
                    
                    <th>Action</th>
                    <th></th>
                    <th></th>
                    <th wire:click="sortBy('Nom_evenement')" style="cursor: pointer;">Nom Evenement
                        @include('partials.icon',['field'=>'Nom_evenement'])
                    </th>
                    <th  wire:click="sortBy('Type')" style="cursor: pointer;">Type</th>
                    <th  wire:click="sortBy('Nb_participants')" style="cursor: pointer;">Nb participants</th>
                    <th  wire:click="sortBy('Adresse')" style="cursor: pointer;">Adresse</th>
                    <th wire:click="sortBy('date_evenement')" style="cursor: pointer;">Date
                        @include('partials.icon',['field'=>'date_evenement'])</th>
       
                </tr>
            </thead>
            <tbody>
                @foreach ($evens as $vlan)
                <tr>
                    {{-- <td>{{$vlan->t_port->t_vlan->t_ref_vlan->Nom_Vlan}}</td> --}}

                    <td>
                        {{-- <i class="bi bi-pencil"></i> --}}
                        {{-- {{route('clm.detailvlan',['id'=>$vlan->Id_CLM])}} --}}
                        <a class="btn btn-outline-success btn-sm details-demande" type="button" href="{{route('clm.detaileven',['id'=>$vlan->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                          </svg></a>
           


                    </td>





                    <td><a class="btn btn-outline-success btn-sm details-demande" type="button" href="{{route('MesParticipants',['id'=>$vlan->id])}}"><div style="size: 5px">Voir Participants</div></a></td>
                    
                    <td>
                      
               
                        <a class="btn btn-outline-danger btn-sm" type="button" href="{{route('clm.deleteeven',['id'=>$vlan->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></a>


                    </td>
                    
                    <td>{{$vlan->Nom_evenement}}</td>
                    <td>{{$vlan->Type}}</td>
                    <td>{{$vlan->Nb_participants}}</td>
                    <td>{{$vlan->Adresse}}</td>
                    <td>{{$vlan->date_evenement}}</td>

               </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <p>
                Affichage de {{$evens->firstItem()}} à {{$evens->lastItem()}} de total {{$evens->total()}} Evenements
            </p>


            <p>
                {{$evens->links()}}
            </p>
        </div>

    </div>
</div>
