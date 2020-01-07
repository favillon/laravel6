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

Route::get('notas', function(){
    return 'Aqui esta el listado de notas';
});

Route::get('notas/crear', function(){
    return 'Crear Notas';
});

Route::get('notas/{id}/editar/', function($id){
    return 'Editar Nota ' . $id;
})->where('id', '[0-9]+'); ;

Route::get('notas/{id}', function($id){
    return 'Detalle Nota ' . $id;
})->where('id', '[0-9]+'); ;