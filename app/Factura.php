<?php

namespace App;

use App\Pago;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    public function pago()
    {
    	return $this->belongsTo(Pago::class);
    }
}
