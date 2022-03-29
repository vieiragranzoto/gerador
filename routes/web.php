<?php

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

Route::get('/gerador', [\App\Http\Controllers\GeradorController::class, 'index']);
Route::prefix('gerador')->group(function (){
    Route::post('gerar-nome', 'GerarNomeController@create')->name('nome');
    Route::post('gerar-gametag', 'GerarGametagController@create')->name('gametag');
    Route::post('gerar-numero', 'GerarNumeroController@create')->name('numero');
    Route::get('verificar-historico', 'VerificarHistoricoController@show')->name('verificar');
});

