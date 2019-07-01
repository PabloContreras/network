<?php

namespace App;

use App\Cliente;
use App\Pago;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{

	protected $fillable = [
		'fecha_inicio','fecha_fin','tipo', 'pago_id'
	];

}
