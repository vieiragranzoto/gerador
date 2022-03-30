<?php

namespace App\Http\Controllers;

use App\Services\CriarNumero;
use Illuminate\Http\Request;

class GerarNumeroController extends Controller
{
    public function create(CriarNumero $criarNumero)
    {
        $tamanho = 6;
        $resultado = $criarNumero->criarNumAleatorio(6);
        var_dump($resultado);
        exit();
        return view('numeros.gerar-numero-create');
    }

}
