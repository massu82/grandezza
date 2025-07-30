<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroCata extends Model
{
    protected $fillable = ['cata_id', 'nombre', 'correo', 'telefono'];

    public function cata()
    {
        return $this->belongsTo(Cata::class);
    }
}
