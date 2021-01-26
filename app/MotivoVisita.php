<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoVisita extends Model
{
    protected $table = "motivo_visitas";
    protected $primaryKey = "id";
    protected $fillable = [
        'descripcion',
        'estado',
        'created_at',
        'updated_at',
    ];
}
