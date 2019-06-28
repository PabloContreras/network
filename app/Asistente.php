<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }
}
