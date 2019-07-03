<?php
/* Rutas Pagos */
Route::get('/contratar',[
	'as'=>'contratar',
	'uses'=>'PagosController@getContratarForm'
]);
Route::post('/datos-pago',[
	'as'=>'procederpago',
	'uses'=>'PagosController@compruebaUser'
]);
Route::post('/pagar',[
	'as'=>'intentarPago',
	'uses'=>'PagosController@intentarPago'
]);

/* Rutas Facturas */
Route::get('/generar-factura', array(
	'as'=>'generarFactura',
	'uses'=>'FacturasController@getFormFactura'
));

Route::post('/generar-factura',array(
	'as'=>'getFactura',
	'uses' =>'FacturasController@getFactura'
));

Route::get('/busca-datos/{rfc}',array(
	'as' => 'buscaDatos',
	'uses'=> 'FacturasController@buscaDatos'
));

/*Route::get('/cargarcsd', array(
	'as' => 'cargarcsd',
	'uses' => 'FacturasController@cargarCSD'
));*/

Route::get('/getfac',array(
	'as' => 'loadFactura',
	'uses' => 'PDFController@generarPDF'
));