<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\HomeLoginController;
use App\Http\Controllers\NuevoUsuarioController;
use App\Http\Controllers\VerConsultasController;
use App\Http\Controllers\CancelarConsultaController;
use App\Http\Controllers\ConsultaPagoController;
use App\Http\Controllers\VerAyudaController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware'=>'auth'],function(){

    Route::resource('/homeLogin',HomeLoginController::class);

    Route::resource('/agendar',ConsultaController::class);
    
    Route::resource('/cancelar',CancelarConsultaController::class);

    Route::resource('/verConsultas', VerConsultasController::class);

    Route::resource('/verAyuda', VerAyudaController::class);

    Route::post('/cancelar/eliminar',[CancelarConsultaController::class,'eliminar']);

    Route::resource('/ayuda', AyudaController::class);
    
    Route::resource('/newUser',NuevoUsuarioController::class);

    Route::resource('/pago',ConsultaPagoController::class);
});


require __DIR__.'/auth.php';
