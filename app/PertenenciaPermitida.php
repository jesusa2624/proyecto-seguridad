<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PertenenciaPermitida extends Model
{
    protected $table = "pertenencias_permitidas";
    protected $primaryKey = "id";
    protected $fillable = [
        'descripcion',
        'estado',
        'created_at',
        'updated_at',
    ];
}
