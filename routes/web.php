<?php

use App\Http\Controllers\ContactController;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);

//Mostrar solo contenido estatico, una vista
Route::view('us', 'us')->name('us');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('prueba', function(){
    return "Nueva ruta";
})->middleware(['auth:sanctum','age']);

Route::get('no-autorized', function () {
    return "No eres mayor de edad";
});
