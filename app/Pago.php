<?php

namespace App;

use App\Factura;
use App\Membresia;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
	protected $fillable = ['cantidad','payment_id','payment_method'];

	public function factura()
	{
		$this->blongsTo(Factura::class);
	}

	public function membresia()
	{
		return $this->hasOne(Membresia::class);
	}
}
