<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class usuariosController extends Controller
{
     public function indexforadmin(){
    	$titulo = 'usuarios';
    	$usuarios = Cliente::all();
    	return view('admin.usuarios.usuarios', compact('usuarios'));
    }

    public function destroyUsuarioForAdmin($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
    	return back();
    }

    public function editUsuarioForAdmin($id){
        $usuario = cliente::find($id);
        return view('admin.editarCliente',compact('usuario'));

    }
    public function verUsuario($id){
        $usuario = Cliente::find($id);
        return view('admin.usuarioVer',compact('usuario'));
    }

    public function update(Request $Request,$id){
       $usuario = Cliente::find($id);
       $usuario->nombre  = $Request->nombre;
       $usuario->apellido = $Request->apellido ;
       $usuario->membresia_id =$Request->membresia_id;
       $usuario->email=$Request->correo;
       $usuario->activo=$Request->activo;

       $usuario->save();
       return back();
    }
}
