@extends('facturas.layout')

@section('links')
<style>
	.row{
		margin-bottom: 0;
	}
	p{
		margin-bottom: 0;
	}

	.sellos p{
		font-size: 10px;
	}

	#qr svg{
		width: 100%;
	}
</style>
@endsection


@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-1">
			<img src="{{ asset('img/core-img/logo.png') }}" class="img-fluid" alt="">
		</div>
		<div class="col-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p style="">Centro de Negocios Toluca</p>
					</div>

				</div>
				<div class="row">
					<div class="col-12">
						<p>RFC: NCO181227TY1</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<p>FOLIO DE FACTURA: {{ $result->Folio }} </p>
		</div>
	</div>
	<div class="row">
		<div class="col-6" style="border: 1px solid black">
			<div class="row">
				<div class="col-12">
					Folio Fiscal: {{ $result->Complement->TaxStamp->Uuid }}
				</div>
				<div class="col-12">
					Numero de Serie del Certificado del SAT: {{ $result->Complement->TaxStamp->SatCertNumber }}
				</div>
				<div class="col-12">
					Numero de Serie del Certificado del Emisor: {{ $result->CertNumber }}
				</div>
				<div class="col-12">
					Fecha y Hora de certificación: {{ $result->Date }}
				</div>
				<div class="col-12">
					Regimen Fiscal: 601 Regimen General de Ley Personas Morales
				</div>
				<div class="col-12">
					Efecto de Comprobante: {{ $result->Type }}
				</div>
			</div>
		</div>
		<div class="col-6" style="border: 1px solid black">
			<div class="row">
				<div class="col-12">
					Fecha de Emision: {{ $result->Date }}
				</div>
				<div class="col-12">
					Vendedor:
				</div>
				<div class="col-12">
					Lugar de Expedicion: {{ $result->ExpeditionPlace }}
				</div>
				<div class="col-12">
					Condiciones de Pago: Contado
				</div>
				<div class="col-12">
					Referencia:
				</div>
				<div class="col-12">
					Pedido:
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="border: 1px solid black; border-top: none">
		<div class="col-4">
			Codigo de cliente:
		</div>
		<div class="col-4">
			RFC: {{ $result->Receiver->Rfc }}
		</div>
		<div class="col-4">
			C.P.:
		</div>
		<div class="col-12">
			Nombre ó Razón Social: {{ $result->Receiver->Name }}
		</div>
		<div class="col-6">
			Uso CFDI:
		</div>
		<div class="col-6">
			Tel.:
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<table class="table">
				<thead>
					<th scope="col">Cant.:</th>
					<th scope="col">Unidad</th>
					<th scope="col">Clave Unidad</th>
					<th scope="col">Codigo Interno</th>
					<th scope="col">Cve. Prod./Serv.</th>
					<th scope="col">Descripcion</th>
					<th scope="col">Precio Unitario</th>
					<th scope="col">Importe</th>
					<th scope="col">Desc.</th>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Servicio</td>
						<td>--</td>
						<td>--</td>
						<td>80131502</td>
						<td>{{ $result->Items[0]->Description }}</td>
						<td>${{ $result->Items[0]->UnitValue }}</td>
						<td>${{ $result->Total }}</td>
						<td>${{ $result->Items[0]->Total }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="row">
				<div class="col-12">
					Metodo de Pago: {{ $result->PaymentMethod }}
				</div>
				<div class="col-12">
					Forma de Pago: {{ $result->PaymentTerms }}
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="row justify-content-right">
				<div class="col-6">SubTotal:</div>
				<div class="col-6">${{ $result->Subtotal - $result->Total*0.16}}</div>
			</div>
			<div class="row">
				<div class="col-6">Descuento:</div>
				<div class="col-6">$0</div>
			</div>
			<div class="row">
				<div class="col-6">I.V.A. 16%</div>
				<div class="col-6">${{ $result->Total*0.16 }}</div>
			</div>
			<div class="row">
				<div class="col-6">Total:</div>
				<div class="col-6">${{ $result->Total }}</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center" style="border: 1px solid black">
		<div class="col-12">
			<div class="container-fluid sellos">
				<div class="row">
					<div class="col-12">
						Sello Digital del CFDI:
						<p>
							{{ $result->Complement->TaxStamp->CfdiSign }}
						</p>
					</div>
				</div>
				<div class="row">

					<div class="col-12">
						Sello del SAT:
						<p>
							{{ $result->Complement->TaxStamp->SatSign }}
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						Cadena Original del Complemento de Certificación Digital del SAT:
						<p>
							{{ $result->OriginalString }}
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-2" id="qr">
			{!! $qr !!}
		</div>
	</div>

</div>
@endsection