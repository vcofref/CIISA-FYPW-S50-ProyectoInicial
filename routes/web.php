<?php

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

Route::get('/contacto/{nombre?}/{edad?}', function ($nombre="Marcela", $edad=18) {
    return view('contacto')
        ->with('nombre', $nombre)
        ->with('edad', $edad)
        ->with('frutas', array('Naranja', 'Pera', 'Frutilla', 'Manzana'));
})->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'
]);

Route::get('/verduras', 'App\Http\Controllers\VerdurasController@index');
Route::get('/verdurasAgregar', 'App\Http\Controllers\VerdurasController@agregar')->name('AgregarVerduras');
Route::get('/verdurasEliminar', 'App\Http\Controllers\VerdurasController@eliminar')->name('EliminarVerduras');

Route::post('/verdurasGuardar', 'App\Http\Controllers\VerdurasController@guardar');