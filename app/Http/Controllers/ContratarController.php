<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContratarController extends Controller
{
    public function contratar()
    {
    	$titulo = 'Contratar';
    	return view('contratar.contratar',compact('titulo'));
    }

    public function formpago(Request $request)
    {
    	$titulo = 'Pagar';
    	return view('contratar.pagar',compact('request','titulo'));
    }
}
