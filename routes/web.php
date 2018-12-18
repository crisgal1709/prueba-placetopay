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

Route::group(['middleware' => 'auth'], function(){

	Route::get('/home', 'HomeController@index')->name('home');	

	Route::get('/', function () {
    	return redirect(route('home'));
	});

	Route::get('transacciones', 'TransaccionesController@index')->name('transacciones.index');
	Route::get('transacciones/crear', 'TransaccionesController@create')->name('transacciones.create');
	Route::post('transacciones', 'TransaccionesController@store')->name('transacciones.store');
	Route::get('transacciones/callback', 'TransaccionesController@callback')->name('transacciones.callback');
	Route::get('transacciones/listado', 'TransaccionesController@listado')->name('transacciones.listado');

	Route::get('transacciones/success', 'TransaccionesController@success')->name('transacciones.success');
	Route::get('transacciones/error', 'TransaccionesController@error')->name('transacciones.error');
});

Auth::routes();


