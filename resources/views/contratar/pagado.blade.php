<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Informacion de pago</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-2">
				<h3>Tipo de membresía:</h3>
			</div>
			<div class="col-2">
				<h3>{{ $membresia->tipo == 1 ? 'Estandard' : 'Gold'}}</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-2">
				<h3>Total pagado:</h3>
			</div>
			<div class="col-2">
				<h3>{{ $orden->amount/100 }}</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-2">
				<h3>Inicio de la membresía</h3>
			</div>
			<div class="col-2">
				<h3>{{ $membresia->fecha_inicio }}</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-2">
				<h3>Fin de la membresía</h3>
			</div>
			<div class="col-2">
				<h3>{{ $membresia->fecha_fin }}</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-2">
				<h3>ID del pago:</h3>
			</div>
			<div class="col-2">
				<h3>{{ $orden->id }}</h3>
			</div>
		</div>
		<div class="row justify-content-center mt-4">
			<div class="col-auto">
				<a href="{{ route('generarFactura') }}" class="btn btn-primary">
					Generar Factura
				</a>
			</div>
			<div class="col-auto">
				<a href="/" class="btn btn-success">Ir al inicio</a>
			</div>
		</div>
	</div>
</body>
</html>