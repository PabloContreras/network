<?php

namespace App;

use App\Factura;
use App\Membresia;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    public function membresia()
    {
    	return $this->belongsTo(Membresia::class);
    }

    public function factura()
    {
    	return $this->hasOne(Factura::class);
    }
}
