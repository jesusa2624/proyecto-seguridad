<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoriza extends Model
{
    protected $table = 'autoriza';
    protected $primaryKey = 'id';
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
