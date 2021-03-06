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
    return view('index');
});

Route::get('/empleado', function () {
    return view('empleado/index');
});

Route::get('/empleado/mostrar', function () {
    return view('empleado/show');
});


Route::get('/fiesta', function () {
    return view('fiesta/index');
});

Route::get('/fiesta/mostrar', function () {
    return view('fiesta/show');
});


Route::get('/proveedor', function () {
    return view('proveedor/index');
});

Route::get('/proveedor/mostrar', function () {
    return view('proveedor/show');
});


Route::get('/producto', function () {
    return view('producto/index');
});

Route::get('/producto/mostrar', function () {
    return view('producto/show');
});


Route::get('/cliente', function () {
    return view('cliente/index');
});

Route::get('/cliente/mostrar', function () {
    return view('cliente/show');
});


Route::get('/salario', function () {
    return view('salario/index');
});

Route::get('/salario/mostrar', function () {
    return view('salario/show');
});


Route::get('/paquete', function () {
    return view('paquete/index');
});

Route::get('/paquete/mostrar', function () {
    return view('paquete/show');
});