<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination; 
use Illuminate\Support\Facades\DB;
use App\Evenement;
use App\Participation;
use Illuminate\Support\Facades\Auth;

class Datatable extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $allevens=Evenement::with('organisateur')
        // ->orderBy($this->sortBy, $this->sortDirection)
        ->where('Nom_evenement','like','%'.$this->search.'%')
        ->orwhere('Type','like','%'.$this->search.'%')
        ->orwhere('Nb_participants','like','%'.$this->search.'%')
        ->orwhere('Adresse','like','%'.$this->search.'%')
        ->orwhere('date_evenement','like','%'.$this->search.'%')
        // ->where('Organisateur','!=',Auth::user()->id)
        
        ->paginate($this->perPage);

        $allpart = DB::table('participation')
        
        ->select('evenement_id')
        ->where('participation.user_id','=',Auth::user()->id)
        ->get();

        // dd($allevens);
        //$allparticpation= Participation::select('evenement_id')->where('user_id',Auth::user()->id)->get();
        //dd($allevens,$allpart);
        $allparttable=array();
        foreach ($allpart as $value){
            
            array_push($allparttable,$value->evenement_id);     
        }
        
        return view('livewire.datatable',compact('allevens','allparttable'));
    }






    public function updatingSearch()
    {
        $this->resetPage();
    }



    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }

        return $this->sortBy = $field;
    }
}
