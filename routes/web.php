<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

/*  Opciones para modificar las urls
    Donde <parameters> indica que mantenga los nombres de las rutas como <cursos>
    <names> indica que mantenga los numbres de la variable <curso> sin modificar
Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'cursos'])->names('cursos');

/*  << De esta forma tendrian que ser las rutas sin usar resource >>
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('cursos/{curso}/update', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
*/


/*          VERCIONES ANTERIORES A 8 
    << Ejemplo para verciones anteriores a Laravel 8 >>
Route::get('/', 'homeController'); verc anteriores a Lara. 8 
   << revisar archivo RouteServiceProviders >>
    
Route::get('cursos', 'CursoController?index'); verciones anteriores a laravel 8
   << el signo ? indica que es opcional el parametro >>

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenidos al curso: $curso de la categoria: $categoria";
    } else {
        return "Bienvenidos al curso: $curso";
    }
});      */
