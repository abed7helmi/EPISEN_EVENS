<?php

namespace App;

use Illuminate\Database\Eloquent\Model;






class Evenement extends Model
{
    protected $fillable = ['Nb_participants_R'];

    public function organisateur(){
        return $this->belongsTo(User::class,'Organisateur');
    }

    public function participations()
    {
        return $this->hasMany('App\Participation');
    }
}
