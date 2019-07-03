<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Factura;
use App\Membresia;
use App\Pago;
use Facturama\Client;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
	private $facturama;

	function __construct()
	{
		$this->facturama = new Client('NetworkCo', 'network19');
	}

	public function getFormFactura()
	{
		$catalogoUsos = $this->getCatalogoUsos();
		return view('facturas.generar-factura', compact(
			'catalogoUsos'
		));
	}

	public function getFactura(Request $r)
	{
		$this->getCFDI($r);
	}

	public function buscaDatos($rfc)
	{
		$c = Cliente::where('rfc','=',$rfc)->first();
		$m = $c->membresia;
		$p = $m->pago;
		return array($c,$m,$p);
	}

	public function cargarCSD()
	{
		$rfc = 'NCO181227TY1';
		$certificado = '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';
		$privatekey = 'MIIFDjBABgkqhkiG9w0BBQ0wMzAbBgkqhkiG9w0BBQwwDgQIAgEAAoIBAQACAggAMBQGCCqGSIb3DQMHBAgwggS+AgEAMASCBMjWrtScOPaNw/Lrzt3gsfC0PclxcshrzC3+gSBGRBh1iIXuFRn3IQsly67EtrIv6D8lIszVVZpH5jSZ64jTUMlnw8O4RvJ37vJA5fbCdnm9KUsUPecfWbklui63lxE0ltfJtxTW6nr3GKkUpXe2F087LmhDiP405zBr+1shekD0CTjtReKZiFjnc+HZnp6gbJD3295v8G/h/Cq60Us7VilZL0w2sM+MydWmIOrJFRYhKzfR8OAOtW0bor5XTTfrLEVIyD8DPwXFh3qtonMJtki09R5fgpMC3sX3AToBT+3qroQL7sCUtuhB9FDopKjkbSw/axbW7ojMOZBdyod2+gmnCzajH0/gWXRCedi3/eybarieGY7Z3n/FlS7JBAEV5VjxeG7mjACIVRyMWGkmLBBkuk1o07ihonkhhM7QU2NCp7HA4pH0x3JgoI1C1y9IKndsmUjBGirPDnnrYs5KfkK6VlVuLjg3Qq+2cBtf9bOf9l+iqJNM+AVtanidStjWFzwQV93Kv54MH5RQ26UsTbGkn2qghbcSkpvFB5yVpXsGIiFzo4uzoO9x9Bo9TOEeeemedjaMV0qd3PyzATLVDS+GT9qpY4L5GrsbBDsuE3cOoiJjDDIsK8202ktVA6JrwtTHM/bII2m89NeIx990vin5SS/iB9mapnmvfAHRXJ4cs/WjdBizrhDE9U9rbS1PGhs88twKbm1ba00vaZgCDgqigtfy9fKmMHxUJ/QIXEOvBz900eLlXxYIBiKCGkXZ27G8laPvLfwc0mvPaBDfdxAU/+Vi2MMW77WmcPJhWS5khrQ3Kyv8+KFTR5FUqzR6Bp8GDb0PDN7mYzYK107PZHyFi9ItXgLOwtwFeQ9UmVa5gOWW4BFcu/ojTxD2C17e/Lt53fvY6OL2TED7Ffzf33kkN8nCl316upT7KsMCajrsPWYwCVh/pJ7A2jc/fb5BdLw2WXmrw1VYFUODVpPb1vQpbhiekh5+beB/jHG3PSjDHbq6tfM+1yKqq9RT70pe+YSqn3QeaNWzLMNHaQI8MAvILCGyoxLHzEZT7Z0MRoZkkygR4Bt6Nyu5GYBUVysjaaJg/55vEBHV07CFGLDQSnhW8UCGugLliFJ4NYpDbXUGrssuduFoBZcJihRxPAWI4nhQyJaJpO3ZI+JPgr73qHomlaV6rAAZyhzYp+463x6ALHpGDMDHEV/+YnAlbbe9egXYNVu0wAxtAd6HNdL9vwJFMUcpXYE/1m8Ax8AA2xdxBhdsA14h4kyxu8o9+ZnI9F1P2O86LRbKKrIN8VGPAbQQ0bGKBnjmP3CmrMvA/RtZjS1rounTXU7fna0KQj8Bs2NiyfN7GTX8ubRleVGQtKpQYY20naCyxkGLJhlK//xaA3JhNMFkl2P7YPXvz9ggp+ISwxsptVqPfeCB16GjdCfTXSinmqFWxw+7eiA9WwSKNpB5vgY652CoOqqCxo/hYpKdpKyHhpfFuNxv2pOMfraN4mfI6pBGVN20y8yXNjCGLvYqmBg7TUc4PfDdw44I8FVFoe/1ReS8XB9WPPBLpPiyzIvPev2S/b+mvp1nvhik8M3YIqompa9EGCuhhmo//28CUbhBhS9riN16HZ03L9MSFumJOH/c0Rc=';
		$pass= 'JALA980327';
		$params = array(
			'Rfc' => $rfc,
			'Certificate' => $certificado,
			'PrivateKey' => $privatekey,
			'PrivateKeyPassword' => $pass
		);
		$lstNameIds = $this->facturama->post('api-lite/csds', $params);
		return $lstNameIds;
	}

	public function getCFDI(Request $r)
	{
		/*return $this->facturama->get('catalogs/FiscalRegimens');*/
		$c = Cliente::find($r->user_id);
		$desc;
		if ($c->membresia->tipo == 1) {
			$desc = 'Estandard';
		}else{
			$desc = 'Gold';
		}

		$params = array(
			'NameId' => '1',
			"ExpeditionPlace" => "50160",
			'CfdiType' => 'I',
			'PaymentForm' => '28', /* 28 debito 03 credito*/
			'PaymentMethod' => 'PUE',
			'Currency' => 'MXN',
			'Folio' => '1',
			'Issuer' => array(
				"FiscalRegime"=> "601",
				"Rfc"=> "NCO181227TY1",
				"Name"=> "Network Coworking SA de CV"
			),
			'Receiver' => array(
				"Name" => $r->nombre_r,
				"CfdiUse" => $r->usofac,
				"Rfc" => $r->rfc_r
			),
			'Items' => array(
				array(
					'Quantity' => '1',
					'ProductCode' => '80131502',
					'UnitCode' => 'E48',
					'Description' => 'Membresia de acceso a oficinas 24 horas, 365 días del año tipo ' . $desc,
					'UnitPrice' => $c->membresia->pago->cantidad,
					'Subtotal' => $c->membresia->pago->cantidad,
					'Discount' => '0',
					'Total' => $c->membresia->pago->cantidad,
				)
			),
			'Taxes' => array(
				array(
					'Name' => 'IVA',
					'Rate' => '16.0',
					'Total' => $c->membresia->pago->cantidad*0.16,
					'IsRetention' => 'false'
				)
			)
		);
		$result = $this->facturama->post('api-lite/2/cfdis', $params);
		if($result->Status == 'active'){
			$f = new Factura([
				'facturama_id' => $result->Id,
				'generada' => true
			]);
			$f->save();
			$c->membresia->pago->facutra_id = $f->id;
		}
	}

	public function getCatalogoUsos()
	{
		return $this->facturama->get('catalogs/CfdiUses', ['keyword' => 'POAJ870619123']);
	}

	public function getCatalogoProductos()
	{
		return $this->facturama->get('catalogs/ProductsOrServices', ['keyword' => 'arrendamiento'] );
	}
}
