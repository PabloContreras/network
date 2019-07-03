<?php

namespace App;

use App\Pago;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
	protected $fillable = [
		'facturama_id','generada'
	];
}
