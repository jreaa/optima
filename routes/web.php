<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home', function (){
    return Inertia::render('Home');
});

/**
 * Controllers
 */

//cliente
Route::resource('client', App\Http\Controllers\ClienteController::class)
    ->middleware('auth:sanctum');

//dispositivos
Route::resource('dispositivos', App\Http\Controllers\DispositivosController::class)
    ->middleware('auth:sanctum');

//mediciones
Route::resource('mediciones', App\Http\Controllers\MedicionesController::class)
    ->middleware('auth:sanctum');

//cuenta
Route::resource('cuentas', App\Http\Controllers\CuentaController::class)
    ->middleware('auth:sanctum');

//graficos
Route::resource('graficos', App\Http\Controllers\GraficosController::class);


//status
Route::resource('status', App\Http\Controllers\StatusController::class)
    ->middleware('auth:sanctum');

Route::resource('statusDispositivos', App\Http\Controllers\StatusDispositivosController::class)
    ->middleware('auth:sanctum');

Route::resource('statusMediciones', App\Http\Controllers\StatusMedicionesController::class)
    ->middleware('auth:sanctum');

Route::resource('statusCuentas', App\Http\Controllers\StatusCuentaController::class)
    ->middleware('auth:sanctum');
//end status

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Home');
})->name('dashboard');
