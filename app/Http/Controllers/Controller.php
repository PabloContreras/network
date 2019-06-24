<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }
    public function index(){
    	$titulo = 'Bienvenido';
    	return view('index', compact('titulo'));
    }

    public function aboutUs(){
    	$titulo = 'Acerca de Network';
    	return view('aboutus', compact('titulo'));
    }
    public function services(){
    	$titulo = 'Servicios';
    	return view('servicios', compact('titulo'));
    }
    public function contact(){
    	$titulo = 'Contacto';
    	return view('contacto', compact('titulo'));
    }
   
}
