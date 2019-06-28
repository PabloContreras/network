<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{
	public function irpagar(Request $request)
	{
		return $request->all();
	}
}
