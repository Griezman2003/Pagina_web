<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\UserController;
use App\Http\Controllers\CuentaController;
=======
use App\Http\Controllers\CuentaController;

>>>>>>> refs/remotes/origin/main

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Cuentacontroller::class, 'pagina'])->name('contenido');
<<<<<<< HEAD
Route::get('registro', [Cuentacontroller::class, 'registro'])->name('registro');
Route::Post('validar', [CuentaController::class, 'validate'])->name('validar');
=======
Route::get('registro', [CuentaController::class, 'registro'])->name('registro');
Route::post('validar', [Cuentacontroller::class, 'validar'])->name('validado');
>>>>>>> refs/remotes/origin/main
