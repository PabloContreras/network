<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Membresia;
use App\Pago;
use Carbon\Carbon;
use Conekta\Conekta;
use Conekta\Order;
use Illuminate\Http\Request;

class PagosController extends Controller
{
	private $apiPrivada;
	private $apiVersion;
	private $lang;
	private $currency;

	private $monto;
	private $tokenCard;

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
		$user_id;
		$membresia_id;

		$fecha_init = Carbon::now()->format('d/m/y');
		$fecha_final = Carbon::now()->addMonths($r->meses)->format('d/m/y');

		$membresia = new Membresia([
			'fecha_inicio' => Carbon::now(),
			'fecha_fin' => Carbon::now()->addMonths($r->meses),
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
			'codpos' => $r->cp,
			'password' => '',
			'membresia_id' => $membresia->id
		]);
		$cliente->save();

		/* Retorna la vista */
		$request = $r;
		$monto;

		if ($request->tipom == 1) {
			$monto = 4500*$request->meses+(4500*$request->meses*0.16);
		}else if($request->tipom == 2){
			$monto = 5100*$request->meses+(5100*$request->meses*0.16);
		}

		$titulo = "Datos de pago";
		return view('contratar.pagar',compact('request','titulo','monto','fecha_init','fecha_final','membresia','cliente'));
	}

	public function intentarPago(Request $r)
	{
		$orden = $this->generarOrden($r,$r->user_id,$r->membresia_id);
		try{
			if ($orden->payment_status == 'paid') {
				$pago = new Pago([
					'cantidad' => $orden->amount/100,
					'payment_id' => $orden->id,
					'payment_method' => $orden->charges[0]->payment_method->type
				]);
				$pago->save();
				$membresia = Membresia::find($r->membresia_id);
				$membresia->pago_id = $pago->id;
				$membresia->save();
				return view('contratar.pagado',compact('orden','membresia'));
			}
		}catch(Exception $e){
			return "Error";
		}
	}

	public function generarOrden(Request $r, $id_usuario, $id_membresia)
	{
		$cliente = Cliente::find($id_usuario);
		$membresia = Membresia::find($id_membresia);


		Conekta::setApiKey($this->apiPrivada);
		Conekta::setLocale($this->lang);
		$orden = Order::create(array(
			'currency' => $this->currency,
			'customer_info' => array(
				'name' => $cliente->nombre,
				'email' => $cliente->email,
				'phone' => $cliente->telefono
			),
			'shipping_contact' => array(
				'address' => array(
					'street1' => $cliente->direccion,
					'postal_code' => $cliente->codpos,
					'country' => 'MX'
				)
			),
			'line_items' => array(
				array(
					'name' => 'asdsad',
					'unit_price' => 2000*100/*$r->montoAPagar*100*/,
					'quantity' => 1
				)
			),
			'charges' => array(
				array(
					'payment_method' => array(
						'type' => 'card',
						'token_id' => $r->token_conekta
					)
				)
			)
		));

		return $orden;
	}

	public function terminos()
	{
		$titulo = 'Términos y Condiciones';
		return view('contratar.terminos',compact('titulo'));
	}
}
