<?php

namespace App;

use App\Factura;
use App\Membresia;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
	protected $fillable = ['cantidad','payment_id'];
}
