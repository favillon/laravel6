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

    $notas = [
        'Nota uno',
        'Nota Dos',
        'Nota Tres',
        'Nota Cuatro',
        '<script>alert("hola mundo")</script>'
    ];
    $notaVacias = [];
    //return view('notas', ['notas' => $notas]); // Pasando Arreglo asociativo
    return view('notas')->with('notas', $notas)->with('notaVacias', $notaVacias);
});

Route::get('notas/crear', function(){
    return view('add-notas');
});

Route::get('notas/{id}/editar/', function($id){
    return 'Editar Nota ' . $id;
})->where('id', '[0-9]+'); ;

Route::get('notas/{id}', function($id){
    return 'Detalle Nota ' . $id;
})->where('id', '[0-9]+'); ;