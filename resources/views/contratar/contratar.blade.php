@php
$carbon = new Carbon\Carbon();
@endphp

@extends('layouts.main')

@section('links')
<style>
	.membresia:hover{
		cursor: pointer;
		background: black;
	}

	.bg-selected{
		background: #cbab78 !important;
	}

	#cantidad::before{
		content: '$';
	}

	.nice-select{
		width: 100%;
		border-top: none;
		border-right: none;
		border-left: none;
		border-radius: 0;
		border-bottom: 2px solid #c9c9c9;
	}

	.nice-select:focus{
		box-shadow: none;
		border-bottom: 2px solid  #cbab78;
	}
</style>
@endsection

@section('content')

<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/about_seccion1_3.jpg);">
	<div class="bradcumbContent">
		<h2>Contratar</h2>
	</div>
</section>

<section class="contact-form-area mb-100" id="contratar">
	<div class="container">
		<div class="section-heading">
			<div class="line-"></div>
			<h2>Contratar</h2>
		</div>
		<form action="{{ route('procederpago') }}" method="POST" >
			@csrf
			<fieldset id="tipo-mem">
				<div class="form-row mb-3">
					<h4 class="text-muted">Seleccionar membresía</h4>
				</div>
				<div class="row justify-content-center">
					<div class="col-12 col-md-6 col-lg-4">
						<div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
							<!-- Thumbnail -->
							<div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/seccion2_2.jpg);"></div>
							<!-- Price -->
							<p class="price-from" id="p-estandard">Desde $4,500/mes</p>
							<!-- Rooms Text -->
							<div class="rooms-text membresia" id="estandard" onclick="seleccionar(this)">
								<div class="line"></div>
								<h4>Estandard</h4>
								<ul>
									<li><p>2 Net Credits</p></li>
									<li><p>Sin Impresiones a Color</p></li>
									<li><p>Sin Impresiones B/N</p></li>
									<li><p>Café, cerveza y té </p></li>
									<li><p>Acceso 24 horas</p></li>
									<li><p>365 días del año</p></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="single-rooms-area wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
							<!-- Thumbnail -->
							<div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/seccion2_3.jpg);"></div>
							<!-- Price -->
							<p class="price-from" id="p-gold">Desde $5,100/mes</p>
							<!-- Rooms Text -->
							<div class="rooms-text membresia" id="gold" onclick="seleccionar(this)">
								<div class="line"></div>
								<h4>Gold</h4>
								<ul>
									<li><p>5 Net Credits</p></li>
									<li><p>50 Impresiones a Color</p></li>
									<li><p>10 Impresiones B/N</p></li>
									<li><p>Café, cerveza y té </p></li>
									<li><p>Acceso 24 horas</p></li>
									<li><p>365 días del año</p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<input type="text" hidden="true" id="tipom" name="tipom" value="" required="true">
			</fieldset>
			<fieldset id="datosp">
				<div class="form-row">
					<h4 class="text-muted">Datos personales</h4>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12 col-md-3">
						<label for="rfc">RFC:</label>
						<input type="text" class="form-control" name="rfc" placeholder="RFC" required="true" pattern="([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])">
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
					<div class="form-group col-sm-12 col-md-3">
						<label for="cp">Codigo postal:</label>
						<input type="text" class="form-control" name="cp" placeholder="Codigo postal" required="true">
					</div>
					{{-- <button type="button" class="btn btn-primary">Siguiente</button> --}}
				</div>
			</fieldset>
			<fieldset id="fecha">
				<div class="form-row">
					<h4 class="text-muted">Meses a contratar</h4>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12 col-md-3">
						<label for="f-min">Meses:</label><br>
						<select onchange="calculaPago()" name="meses" id="meses" class="nice-select form-control" style="width: 100%" required="true">
							<option value="-1" disabled="true" selected="true">Seleccione una opcion</option>
							<option value="1">1</option>
							<option value="3">3</option>
						</select>
					</div>
				</div>
			</fieldset>
			<fieldset id="monto">
				<div class="row">
					<div class="col-12 col-md-3">
						<h3 class="text-muted">Monto a pagar: </h3>
					</div>
					<div class="col-12 col-md-3">
						<h2 id="cantidad"></h2>
					</div>
					<div class="col-12 col-md-3">
						<h4 class="text-muted">IVA incluido</h4>
					</div>
				</div>
			</fieldset>
			<div class="form-row justify-content-center">
				<div class="form-group col-auto">
					<button type="submmit" class="btn btn-success">Proceder a pago</button>
				</div>
			</div>
		</form>
	</div>
</section>
@endsection

@section('scripts')
<script>
	var planSelected = false;;
	function calculaPago() {
		var tm = $("#tipom").val();
		var me = $('#meses').val();
		var aux;
		if(this.planSelected){
			if(tm == 1){
				aux = me*4500+(me*4500*0.16);
				document.getElementById('cantidad').innerHTML = aux;
			}else if(tm == 2){
				aux = me*5100+(me*5100*0.16);
				document.getElementById('cantidad').innerHTML = aux;
			}
		}else{
			document.getElementById('cantidad').innerHTML = 'Seleccione una membresía';
		}

	}

	function seleccionar(source) {
		var mem = source.getAttribute('id');
		if(mem == 'estandard'){
			planSelected = true;
			$('#estandard').addClass('bg-selected');
			$('#p-estandard').addClass('bg-selected');
			$('#gold').removeClass('bg-selected');
			$('#p-gold').removeClass('bg-selected');
			$('#tipom').val('1');
		}else if(mem == 'gold'){
			planSelected = true;
			$('#gold').addClass('bg-selected');
			$('#p-gold').addClass('bg-selected');
			$('#estandard').removeClass('bg-selected');
			$('#p-estandard').removeClass('bg-selected');
			$('#tipom').val('2');
		}
	}
</script>
@endsection