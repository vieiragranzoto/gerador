<?php

use App\Http\Controllers\GeradorController;
use App\Http\Controllers\GerarNumeroController;
use Illuminate\Support\Facades\Route;

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

Route::get('/gerador', [GeradorController::class, 'index']);
Route::prefix('gerador')->group(function (){
    Route::get('gerar-nome', [GerarNomeController::class, 'create'])->name('nome');

    Route::get('gerar-gametag', [GerarGametagController::class,'create'])->name('gametag');

    Route::get('gerar-numero', [GerarNumeroController::class,'create'])->name('numero');
    Route::get('gerar-numero/resultado', [GerarNumeroController::class, 'show'])->name('mostrar-numero');

    Route::get('verificar-historico', [VerificarHistoricoController::class, 'show'])->name('verificar');
});

