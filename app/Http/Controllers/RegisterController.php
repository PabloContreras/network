<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
    	$titulo = 'Registro';

    	return view('registro', compact('titulo'));
    }
    public function store(Request $request){
        $titulo = 'Registro';
    	$usuario = new Cliente();

    	$usuario->name = $request->name;
    	$usuario->email = $request->email;
    	$usuario->user = $request->user;

        $usuario->save();
       	return redirect('/home', compact('titulo'));
    }
} 
