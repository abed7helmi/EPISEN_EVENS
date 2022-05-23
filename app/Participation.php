<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    public function evenment()
    {
        return $this->belongsTo('App\Evenement','evenement_id');
    }
 
    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }
}
