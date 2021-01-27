<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $table = "visitas";
    protected $primaryKey = "id";

    public function relacionVisitante(){
        return $this->hasOne('App\Visitante', 'id', 'visitantes_id');
    }

}
