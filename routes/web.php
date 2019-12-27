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
Route::get('/lobby', function () {
    return view('lobby');
});
Route::post('/lobby','AdministratorController@closed');

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', 'AdministratorController@index');
Route::post('/home', 'AdministratorController@store');

Route::get('/registrarAdministrador', 'AdministratorController@registrarView');
Route::post('/registrarAdministrador', 'AdministratorController@registrar');

Route::get('/registrarCliente', 'ClientController@index');
Route::post('/registrarCliente', 'ClientController@store');

Route::get('/registrarLibro', 'BookController@index');
Route::post('/registrarLibro', 'BookController@store');

Route::post('/registrarDevolucion', 'AdministratorController@openRegistrarDevolucion');

Route::get('/registrarPrestamo', 'LoanController@index');
Route::post('/registrarPrestamo', 'LoanController@store');

Route::get('/registrarDevolucion', 'ReturnController@index');
Route::post('/registrarDevolucion', 'ReturnController@store');

Route::get('/gestionarDatos', 'GestionDatosController@index');
Route::post('/gestionarDatos', 'GestionDatosController@store');

Route::get('/gestionarCliente', 'GestionClienteController@index');
Route::post('/gestionarCliente', 'GestionClienteController@store');
Route::get('/modificarCliente', 'GestionClienteController@updateView');
Route::post('/modificarCliente', 'GestionClienteController@update');
Route::get('/eliminarCliente', 'GestionClienteController@deleteView');
Route::post('/eliminarCliente', 'GestionClienteController@delete');

Route::get('/gestionarLibro', 'GestionLibroController@index');
Route::post('/gestionarLibro', 'GestionLibroController@store');
Route::get('/modificarLibro', 'GestionLibroController@updateView');
Route::post('/modificarLibro', 'GestionLibroController@update');

Route::get('/gestionarEjemplar', 'GestionEjemplarController@index');

Route::get('/gestionarPrestamo', 'GestionPrestamoController@index');

Route::get('/gestionarDevolucion', 'GestionDevolucionController@index');

Route::get('/', function () {
    return view('welcome');
});
