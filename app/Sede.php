<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = "sedes";
    protected $primaryKey = "id";
    protected $fillable = [
        'descripcion',
        'estado',
        'created_at',
        'updated_at',
    ];
}
