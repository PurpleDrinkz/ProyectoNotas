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
    $notas = DB::table('notas')->get();

    return view('notas', ['notas' => $notas]);
});

Route::get('agregar', function(){
    return view('agregar');

})->name('notas.index');


Route::get('notas/{id}/editar', function ($id){
    $notas = DB::table('notas')
    ->where('id', $id)
    ->first();

    return view('editar') .$id;

})->name('notas.edit');


