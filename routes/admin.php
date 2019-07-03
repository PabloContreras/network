<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');
/*Route::post('/datos/actualizar','AdminController@update');*/
//Auth::routes();
Route::get('/usuarios','usuariosController@indexforadmin');

Route::get('/homedash',function(){
  return view('admin.home');
})->name('homedash');

Route::get('/usuarios/{id}/actualizar', 'usuariosController@editUsuarioForAdmin');
Route::put('/usuarios/{id}/update', 'usuariosController@update');

Route::delete('/usuarios/{id}/eliminar','usuariosController@destroyUsuarioForAdmin');

Route::post('/usuarios/{id}/ver','usuariosController@verUsuario');
Route::get('/home','AdminController@profile');

Route::get ('/usuario','AdminController@admindatos');

Route::put('/{id}/update','AdminController@update');
route::put('/usuarios/{id}/update','usuariosController@update');








