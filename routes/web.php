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
    return view('welcome');
});



Auth::routes();

Route::get('home', 'HomeController@index')->name('home.index');
Route::get('homeesp', 'HomeespController@index')->name('homeesp.index');
//Route::get('/', 'PlaquetaController@index');

Route::get('/info', 'HomeController@index');

	//             Rutas para Usuarios Autenticados --> Alta, Ver bienes y movimientos

	// Altas
	Route::get('/altas/altaespecie', 'AltaespecieController@index')->name('altaespecie');

	Route::get('/altas/altabien', 'AltaController@index')->name('altabien');

	Route::post('/altas/altabien', 'AltaController@store');
	Route::get('/altas/altabien/{id}', 'AltaController@edit');
	Route::post('/altas/altabien/{id}', 'AltaController@update');
	Route::get('/altas/{id}/eliminar', 'AltaController@delete');

	// Especies

	Route::get('/altaesp/{id}', 'AltaespecieController@edit');
	Route::post('/altaesp/{id}', 'AltaespecieController@update');



	// Altas Especies

	Route::get('/altasespecies/altaespecie', 'AltaController@index')->name('altabien');
	Route::post('/altas/altaespecie', 'AltaespecieController@store');
	Route::get('/altas/{id}/nuevaalta', 'AltaespecieController@nuevaalta');
	Route::post('/altabien/{id}/baja', 'AltaespecieController@baja');

	//Bajas
	Route::get('/bajas/bajabien', 'BajaController@index')->name('bajabien');


	//Traslados
	Route::get('/traslados/trasladobien', 'TrasladoController@index')->name('trasladobien');

	// Proveedores

	Route::get('proveedores', 'ProveedorController@index')->name('proveedores.index');
	Route::post('proveedores', 'ProveedorController@store');

	// Inventariables

	Route::post('/inventariables', 'InventariableController@store');
	
	Route::post('proveedor/editar', 'ProveedorController@update');
	Route::get('proveedor/{id}/eliminar', 'ProveedorController@delete');

	// Ver bienes y Movimientos inventario

	Route::get('/verbienes', 'VerbienesController@index');
	Route::get('/ver/{id}', 'VerbienesController@show');

	Route::get('/inventariables/{id}/traslado', 'VerbienesController@edit');
	Route::post('/inventariables/{id}/traslado', 'VerbienesController@update');

	Route::get('/inventariables/{id}/darbaja', 'VerbienesController@editb');
	Route::post('/inventariables/{id}/darbaja', 'VerbienesController@updateb');


	Route::get('/altas/{id}/traslado', 'AltaController@traslado');
	Route::post('/altabien/{id}/baja', 'AltaController@baja');

	Route::get('/inventariarbien', 'HomeController@inventariarbien');


	// Grupo de rutas para administracion

	Route::group(['middleware' => 'admin', 'namespace' => 'Admin'], function () {

	// Administración de Usuarios
	Route::get('/usuarios', 'UserController@index');
	Route::post('/usuarios', 'UserController@store');
	
	Route::get('/usuarios/{codigo}', 'UserController@edit');
	Route::post('/usuarios/{id}', 'UserController@update');

	Route::get('/usuarios/{id}/eliminar', 'UserController@delete');


	// Administración de Grupos
	Route::get('/grupos', 'GrupoController@index');
	Route::post('/grupos', 'GrupoController@store');

	Route::get('/grupos/{id}', 'GrupoController@edit');
	Route::post('/grupos/{id}', 'GrupoController@update');

	Route::get('/grupos/{id}/eliminar', 'GrupoController@delete');

	Route::get('/grupos/{codigo}/restaurar', 'GrupoController@restore');

	// Administración de Subgrupos
	Route::get('/subgrupos', 'SubgrupoController@index');
	Route::post('/subgrupos', 'SubgrupoController@store');

	Route::get('/subgrupos/{id}', 'SubgrupoController@edit');
	Route::post('/subgrupos/{id}', 'SubgrupoController@update');

	Route::get('/subgrupos/{id}/eliminar', 'SubgrupoController@delete');

	Route::get('/subgrupos/{id}/restaurar', 'SubgrupoController@restore');

	// Administración de Especies
	Route::get('/especies', 'EspecieController@index');
	Route::post('/especies', 'EspecieController@store');

	Route::get('/especies/{id}', 'EspecieController@edit');
	Route::post('/especies/{id}', 'EspecieController@update');

	Route::get('/especies/{id}/eliminar', 'EspecieController@delete');

	Route::get('/especies/{codigo}/restaurar', 'EspecieController@restore');


	// Administración de Ubicaciones
	Route::get('/ubicaciones', 'UbicacionController@index');
	Route::post('/ubicaciones', 'UbicacionController@store');

	Route::get('/ubicaciones/{id}', 'UbicacionController@edit');
	Route::post('/ubicaciones/{id}', 'UbicacionController@update');

	Route::get('/ubicaciones/{id}/eliminar', 'UbicacionController@delete');
	Route::get('/ubicaciones/{id}/restaurar', 'UbicacionController@restore');

	// Sub ubicaciones
	Route::post('/sububicaciones', 'SububicacionController@store');

	Route::post('sububicacion/editar', 'SububicacionController@update');
	Route::get('sububicacion/{id}/eliminar', 'SububicacionController@delete');

});