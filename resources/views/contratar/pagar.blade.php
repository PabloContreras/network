@extends('layouts.main')

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
				<h5>{{ $request->meses}}</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<h5>Inicio de la membresía:</h5>
			</div>
			<div class="col-6">
				<h5>{{ $request->inimem }}</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<h5>Monto a pagar:</h5>
			</div>
			<div class="col-6">
				<h5>${{ $request->tipom == 2 ? $request->meses*5100 : $request->meses*4500 }}</h5>
			</div>
		</div>
		<form action="{{ route('procederpago') }}" method="POST" >
			@csrf
			<fieldset id="info-pago">
				<div class="form-row">
					<h4 class="text-muted">Datos personales</h4>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12 col-md-3">
						<label for="rfc">RFC:</label>
						<input type="text" class="form-control" name="rfc" placeholder="RFC" required="true">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<label for="nombres">Nombres:</label>
						<input type="text" class="form-control" name="nombres" placeholder="Nombres" required="true">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<label for="apellidop">Apellido paterno:</label>
						<input type="text" class="form-control" name="apellidop" placeholder="Apellido paterno" required="true">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<label for="apellidom">Apellido materno:</label>
						<input type="text" class="form-control" name="apellidom" placeholder="Apellido materno" required="true">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<label for="correo">Correo:</label>
						<input type="email" class="form-control" name="correo" placeholder="Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="true">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<label for="telefono">Teléfono:</label>
						<input type="tel" class="form-control" pattern="[0-9]{10}" name="telefono" placeholder="Teléfono (10 digitos)" required="true">
					</div>
					<div class="form-group col-sm-12 col-md-3">
						<label for="direccion">Dirección:</label>
						<input type="text" class="form-control" name="direccion" placeholder="Dirección" required="true">
					</div>
					{{-- <button type="button" class="btn btn-primary">Siguiente</button> --}}
				</div>
			</fieldset>
			<div class="form-row justify-content-center">
				<div class="form-group col-auto">
					<button type="submmit" class="btn btn-success">Pagar</button>
				</div>
			</div>
		</form>
	</div>
</section>
@endsection