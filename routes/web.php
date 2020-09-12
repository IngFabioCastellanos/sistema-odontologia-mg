<?php

use App\Exports\InventariosExport;
use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);

Route::get('home', 'HomeController@index')->middleware('verified');

Route::group(['middleware' => ['permission:ver_notas|editar_notas|borrar_notas|crear_notas']], function () {
    Route::resource('notas', 'notasController');
});

Route::group(['middleware' => ['permission:ver_usuarios|editar_usuarios|borrar_usuarios|crear_usuarios']], function () {
    Route::resource('users', 'UserController');
});

Route::group(['middleware' => ['permission:ver_roles|editar_roles|borrar_roles|crear_roles']], function () {
    Route::resource('roles', 'RoleController');
});

Route::group(['middleware' => ['permission:ver_inventarios|editar_inventarios|borrar_inventarios|crear_inventarios']], function () {
    Route::resource('inventarios', 'InventarioController');
});

Route::get('/export', function(InventariosExport $inventariosExport){
	return $inventariosExport->download('inventarios.xlsx');
})->name('inventarios.export');

Route::group(['middleware' => ['permission:ver_ingresos|editar_ingresos|borrar_ingresos|crear_ingresos']], function () {
    Route::resource('ingresos', 'IngresosController');
});




