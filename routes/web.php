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
Route::controller(CursoController::class)->group(function () {
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});


//Crear una ruta para el controlador: "Route::get"

//Pasar un parametro mediante la url
//Route::get('cursos/{curso}', [CursoController::class, 'show']);

/*Pasar un segundo parametro opcional mediante la url con el simbolo "?"
    Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso: $curso, de la categoria: $categoria";
    } else {
        return "Bienvenido al curso: $curso";
    }
}); */