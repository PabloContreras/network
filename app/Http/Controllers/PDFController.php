<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\loadView;
use Illuminate\Http\Request;

class PDFController extends Controller
{
	public function generarPDF()
	{
		/*$pdf = PDF::loadView('facturas.factura');
		return $pdf->download('factura.pdf');*/

		return view('facturas.factura');
	}
}
