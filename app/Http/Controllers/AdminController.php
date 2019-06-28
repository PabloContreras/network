<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cliente;

class AdminController extends Controller
{
    public function profile(){
    	$admin = Auth::id();
    	$users = Cliente::all();
    	return view('admin.home', compact('admin', 'users'));
    }
}
