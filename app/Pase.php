<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pase extends Model
{
    protected $table = "pases";
    protected $primaryKey = "id";
    protected $fillable = [
        'descripcion',
        'sede',
        'estado',
        'created_at',
        'updated_at',
    ];
}
