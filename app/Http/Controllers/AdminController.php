<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cliente;
use App\Admin;

class AdminController extends Controller
{
    public function profile(){
    	$admin = Auth::id();
    	$users = Cliente::all();
    	return view('admin.home', compact('admin', 'users'));
    }

    public function admindatos(){
        $admin = Admin::find( auth()->id());
        return view('admin.user', compact('admin'));
    }

    public function update(Request $Request){
       $admin = Admin::find(auth()->id());
       $admin->name  = $Request->nombre;
       $admin->email = $Request->correo;
       $admin->empresa = $Request->empresa;
       $admin->save();
       return back();
    }


}