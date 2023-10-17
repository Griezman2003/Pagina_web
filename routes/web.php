<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CuentaController;
use App\Models\Cuenta;

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

Route::get('/', [Logincontroller::class, 'pagina'])->name('contenido');
Route::get('registro', [Logincontroller::class, 'registro'])->name('registro');
Route::post('validar', [Cuentacontroller::class, 'validar'])->name('validar');