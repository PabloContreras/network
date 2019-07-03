
var publicKey = $('#api-public').attr('value');
var tokenParams;

function procesarPago() {

	Conekta.setPublicKey(publicKey);
	tokenParams = {
		"card":{
			"number": $('#ntarjeta').val(),
			"name": $('input[name="nombre"]').val(),
			"exp_year": $('input[name="anio"]').val(),
			"exp_month": $('input[name="mes"]').val(),
			"cvc": $('#cvc').val()
		}
	}
	Conekta.Token.create(tokenParams, conektaSuccessResponseHandler, conektaErrorResponseHandler);
}

function conektaSuccessResponseHandler(token) {
	$('#token_conekta').val(token.id);
	$('#form-pago').submit();
}

function conektaErrorResponseHandler(argument) {
	console.log(argument)
	return false;
}