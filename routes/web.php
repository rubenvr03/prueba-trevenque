<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\AsignaturasController;
use App\Http\Controllers\MatriculasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();


Route::middleware(['auth'])->group(
    function(){
        Route::resource('/alumnos', AlumnosController::class);
        Route::resource('/asignaturas', AsignaturasController::class);
        Route::resource('/matriculas', MatriculasController::class);
    });
