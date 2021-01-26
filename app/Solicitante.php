<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $table = "solicitantes";
    protected $primaryKey = "id";
    protected $fillable = [
        'dni',
        'cip',
        'grado',
        'nombres',
        'apelliido_paterno',
        'apellido_materno',
        'estado',
        'created_at',
        'updated_at',
    ];
}
