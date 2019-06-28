<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;
use App\Cliente;
use Auth;

class ProfileController extends Controller
{
	public function perfilAdmin(Request $request)
    {
        $admin = Admin::find(Auth::id());
        $users = Cliente::all();
        if (!$admin) {
            $request->session()->flash('danger', 'Ha ocurrido un problema al tratar de mostrar tu perfil.');
            return redirect('/admin');
        }
        return view('admin.home',compact('admin', 'users'));
    }
}
