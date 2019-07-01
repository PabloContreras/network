<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
    public function articulo()
    {
        return $this->belongsTo(Articulo::class);
    }
}
