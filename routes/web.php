<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$titulo = 'Bienvenido';
    return view('index', compact($titulo));
});

//Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/', 'Controller@index');
Route::get('/inicio', 'Controller@index');
Route::get('/about', 'Controller@aboutUs');
Route::get('/servicios', 'Controller@services');
Route::get('/contacto', 'Controller@contact');

Route::get('/registro/agregar', 'RegisterController@create');
Route::post('/registro', 'RegisterController@store');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'cliente'], function () {
  Route::get('/login', 'ClienteAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'ClienteAuth\LoginController@login');
  Route::post('/logout', 'ClienteAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'ClienteAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ClienteAuth\RegisterController@register');

  Route::post('/password/email', 'ClienteAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ClienteAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ClienteAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ClienteAuth\ResetPasswordController@showResetForm');
});
