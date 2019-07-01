@php
use Carbon\Carbon;
@endphp

@extends('layouts.main')

@section('links')
	<meta name="api-public" id="api-public" value='{{ env('CONEKTA_APIKEYPU') }}'>
@endsection

@section('content')

<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/about_seccion1_3.jpg);">
	<div class="bradcumbContent">
		<h2>Pagar</h2>
	</div>
</section>

<section class="contact-form-area mb-100" id="contratar">
	<div class="container">
		<div class="section-heading">
			<div class="line-"></div>
			<h2>Pagar</h2>
		</div>
		<div class="row">
			<div class="col-12">
				<h2>Informacion</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<h5>Tipo de membresía:</h5>
			</div>
			<div class="col-6">
				<h5>{{ $request->tipom == 2 ? 'Gold' : 'Estandard'}}</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<h5>Meses a contratar:</h5>
			</div>
			<div class="col-6">
				<h5>{{  $request->meses }}</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<h5>Inicio de la membresía:</h5>
			</div>
			<div class="col-6">
				<h5>{{ $fecha_init }}</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<h5>Fin de la membresía:</h5>
			</div>
			<div class="col-6">
				<h5>{{ $fecha_final }}</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<h5>Monto a pagar:</h5>
			</div>
			<div class="col-6">
				<h5>${{ $monto }}</h5>
			</div>
		</div>
		<form id="form-pago" action="{{ route('intentarPago') }}" method="POST">
			@csrf
			<fieldset id="info-pago">
				<div class="form-row">
					<h4 class="text-muted">Informacion de pago</h4>
				</div>
				<div class="form-row">
					<div class="col-auto my-1">
						<img src="{{ asset('img/cards.png') }}" class="img-fluid" width="150px" alt="">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12 col-md-3">
						<label for="nombre">Nombre del tarjetahabiente:</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="true">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<label for="ntarjeta">Numero de tarjeta:</label>
						<input type="text" class="form-control" id="ntarjeta" placeholder="Numero de tarjeta" required="true">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<label for="mes">Més de vencimiento:</label>
						<input type="text" class="form-control" name="mes" placeholder="MM" required="true">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<label for="anio">Año de vencimiento:</label>
						<input type="text" class="form-control" name="anio" placeholder="AA" required="true">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<label for="cvc">CVC:</label>
						<input type="text" class="form-control" id="cvc" placeholder="CVC" required="true">
					</div>
					<input type="text" id="token-conekta" name="token-conekta" hidden="true">
					{{-- <button type="button" class="btn btn-primary">Siguiente</button> --}}
					<input type="text" name="membresia_id" hidden="true" value="{{ $membresia->id }}">
					<input type="text" name="montoAPagar" hidden="true" value="{{ $monto }}">
				</div>
			</fieldset>
			<div class="form-row justify-content-center">
				<div class="form-group col-auto">
					<button type="button" class="btn btn-success" onclick="procesarPago()">Pagar</button>
				</div>
			</div>
		</form>
	</div>
</section>
@endsection

@section('scripts');
<script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
<script src="{{ asset('js/token-coneckta.js') }}"></script>
@endsection