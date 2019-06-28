<?php

namespace App;

use App\Cliente;
use App\Pago;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    public function pago()
    {
    	return $this->hasOne(Pago::class);
    }

    public function cliente()
    {
    	return $this->belongsTo(Cliente::class);
    }
}
