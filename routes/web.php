<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomPasswordResetController;
use App\Http\Controllers\PDFController;

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
    return view('layouts/login');
});

Route::resource('empresa', 'App\Http\Controllers\EmpresaController');
Route::resource('equipo', 'App\Http\Controllers\EquipoController');
Route::resource('servicio', 'App\Http\Controllers\ServicioController');
Route::resource('cliente_empresarial', 'App\Http\Controllers\ClienteEmpresarialController');
Route::resource('cliente_particular', 'App\Http\Controllers\ClienteParticularController');
Route::resource('tecnico', 'App\Http\Controllers\TecnicoController');

Route::get('/generar-reporte', [PDFController::class, 'generarPDF']);


Route::get('/reset-password', [CustomPasswordResetController::class, 'showResetForm'])->name('password.reset.custom');
Route::post('/reset-password', [CustomPasswordResetController::class, 'reset'])->name('password.update.custom');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
