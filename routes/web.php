<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

//Grupo de rutas
/* Route::controller(CursoController::class)->group(function () {
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    //Ruta para crear un curso
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
    //Ruta para editar un curso
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');    
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
    //Eliminar registros
    Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
}); */

//Cambiar titulos de la url sin cambiar las rutas oficiales dentro del codigo
//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');

Route::resource('cursos', CursoController::class);
