<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    protected $table = "pisos";
    protected $primaryKey = "id";
    protected $fillable = [
        'descripcion',
        'sede',
        'estado',
        'created_at',
        'updated_at',
    ];
}
