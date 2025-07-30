<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cata extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'fecha_hora', 'capacidad'];

    public function registros()
    {
        return $this->hasMany(RegistroCata::class);
    }
}
