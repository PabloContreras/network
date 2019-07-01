<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Membresia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagosController extends Controller
{
	private $apiPrivada;
	private $apiVersion;
	private $lang;
	private $currency:

	function __construct()
	{
		$this->apiPrivada = env('CONEKTA_APIKEYPR');
		$this->apiVersion = env('CONEKTA_APIKEYPR');
		$this->lang = env('CONEKTA_LANG');
		$this->currency = env('CONEKTA_CURRENCY');
	}

	public function getContratarForm()
	{
		$titulo = 'Contratar';
		return view('contratar.contratar',compact('titulo'));
	}

	public function compruebaUser(Request $r)
	{
		$fecha_init = Carbon::now()->format('d/m/y');
		$fecha_final = Carbon::now()->addMonths($r->meses)->format('d/m/y');


		$membresia = new Membresia([
			'fecha_inicio' => $fecha_init,
			'fecha_fin' => $fecha_final,
			'tipo' => $r->tipom,
			'pago_id' => 0
		]);
		$membresia->save();
		$cliente = new Cliente([
			'rfc' => $r->rfc,
			'nombre' => $r->nombres,
			'apellido' => $r->apellidop.' '.$r->apellidom,
			'email' => $r->correo,
			'telefono' => $r->telefono,
			'direccion' => $r->direccion,
			'password' => '',
			'membresia_id' => $membresia->id
		]);
		$cliente->save();
		/* Retorna la vista */
		$request = $r;
		$monto;
		if ($request->tipom == 1) {
			$monto = 4500*$request->meses;
		}else if($request->tipom == 2){
			$monto = 5100*$request->meses;
		}
		$titulo = "Datos de pago";
		return view('contratar.pagar',compact('request','titulo','monto','fecha_init','fecha_final','membresia'));
	}

	public function intentarPago(Request $r)
	{
		return $r->all();

	}
}
