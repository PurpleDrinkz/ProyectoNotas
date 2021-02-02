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


Route::get('notas', function () {
    $notas = [
        /*'Primera nota',
        'Segunda nota',
        'Tercera nota',
        'Cuarta nota',*/
    ];

    return view('notas', ['notas' => $notas]);
});

Route::get('agregar', function(){
    return view('agregar');

});