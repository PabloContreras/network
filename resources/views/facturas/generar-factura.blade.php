@extends('facturas.layout')

@section('links')
	<style>
		.fondo{
			height: 70vh;
			background-size: cover;
			background-position: center;
		}

		.fondo h1{
			background-color: rgba(0,0,0,.5);
			padding: 5px 30px;
			color: white;
			border: 3px solid #cbab78
		}
	</style>
@endsection

@section('titulo')
Facturar
@endsection

@section('contenido')

<section class="fondo breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url({{ asset('img/bg-img/about_Seccion3_1.jpg') }});">
	<div class="bradcumbContent">
		<h1>Facturar</h1>
	</div>
</section>

<section class="contact-form-area mb-100" id="facturar">
	<div class="container mt-4">
		<div class="row">
			<div class="col-12">
				<form action="{{ route('getFactura') }}" method="POST" id="form">
					@csrf
					<fieldset id="datos-cliente">
						<div class="form-row">
							<h3>Datos Personales</h3>
						</div>
						<div class="form-row align-items-end">
							<div class="form-group col-3">
								<label for="rfc_cliente">RFC</label>
								<input type="text" class="form-control" id="rfc_cliente" pattern="([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])" name="rfc_c" required="true">
							</div>
							<div class="form-group col-1 text-center">
								<button class="btn btn-success btn-sm" onclick="buscarDatos()" type="button">Buscar</button>
							</div>
							<div class="form-group col-2">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" id="nombre" name="nombre" disabled="true">
							</div>
							<div class="form-group col-2">
								<label for="apellidos">Apellidos</label>
								<input type="text" class="form-control" id="apellidos" name="apellidos" disabled="true">
							</div>
							<div class="form-group col-2">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email" name="email" disabled="true">
							</div>
							<div class="form-group col-2">
								<label for="direccion">Direccion</label>
								<input type="text" class="form-control" id="direccion" name="direccion" disabled="true">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-row">
							<h3>Informacion de membresia</h3>
						</div>
						<div class="form-row">
							<div class="form-group col-2">
								<label for="tipomem">Tipo de mebresía</label>
								<input type="text" class="form-control" id="tipomem" disabled="true">
							</div>
							<div class="form-group col-2">
								<label for="importe">Importe total</label>
								<input type="text" class="form-control" id="importe" disabled="true">
							</div>
							<div class="form-group col-2">
								<label for="fecha_inicio">Fecha de inicio</label>
								<input type="text" class="form-control" id="fecha_inicio" disabled="true">
							</div>
							<div class="form-group col-2">
								<label for="fecha_fin">Fecha de fin</label>
								<input type="text" class="form-control" id="fecha_fin" disabled="true">
							</div>
							<div class="form-group col-4">
								<label for="desc">Descripcion</label>
								<input type="text" class="form-control" id="desc" disabled="true">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-row">
							<h3>Informacion del receptor</h3>
						</div>
						<div class="form-row">
							<div class="col-3">
								<label for="nombre_r">Nombre del receptor</label>
								<input type="text" class="form-control" placeholder="Nombre del receptor" name="nombre_r" required="true">
							</div>
							<div class="col-3">
								<label for="rfc_r">RFC</label>
								<input type="text" class="form-control" placeholder="RFC del receptor" name="rfc_r" pattern="([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])" required="true">
							</div>
							<div class="col-3">
								<label for="usofac">Uso de la factura</label>
								<select name="usofac" id="" class="custom-select" required="true">
									<option value="0" disabled="true" selected="true">Seleccione una opcion</option>
									@foreach($catalogoUsos as $c)
									<option value="{{ $c->Value }}">{{ $c->Name }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<input type="hidden" value="" id="user_id" name="user_id">
						<div class="form-row justify-content-center mt-4">
							<div class="col-auto">
								<button type="submit" class="btn btn-success btn-sm">
									Generar Factura
								</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection

@section('scripts')
<script>
	function buscarDatos(){
		var rfc = $('#rfc_cliente').val();
		if(rfc.length != 0){
			$.ajax({
				url: "{{ route('buscaDatos','rfc') }}".replace('rfc', $('#rfc_cliente').val()),
				success: function(respuesta){
					console.log(respuesta);
					/* Informacion del cliente */
					$('#user_id').val(respuesta[0].id);
					$('#nombre').val(respuesta[0].nombre);
					$('#apellidos').val(respuesta[0].apellido);
					$('#email').val(respuesta[0].email);
					$('#direccion').val(respuesta[0].direccion);
					/* Informacion de membresia */
					$('#tipomem').val((respuesta[1].tipo == 1 ? 'Estandard' : 'Gold'));
					$('#importe').val('$'+respuesta[2].cantidad);
					$('#fecha_inicio').val(respuesta[1].fecha_inicio);
					$('#fecha_fin').val(respuesta[1].fecha_fin);
					$('#desc').val((respuesta[1].tipo == 1 ? 'Membresía Estandard' : 'Membresía Gold'));
				},
				error: function(respuesta){
					console.log('Error');
					console.log(respuesta);
				},
			});
		}
	}

	function solicitarFactura() {
		var nom = $('#nombre').val();
		if(nom!=null){
			$('#form').submit();
		}
	}
</script>
@endsection
