<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVisitante extends Model
{
    protected $table = "tipo_visitantes";
    protected $primaryKey = "id";
    protected $fillable = [
        'descripcion',
        'estado',
        'created_at',
        'updated_at',
    ];
}
