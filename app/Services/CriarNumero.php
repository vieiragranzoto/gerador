<?php

namespace App\Services;

class CriarNumero
{
    public function criarNumAleatorio(int $numero)
    {
        $numero =[];

        for ($c=0;$c<6;$c++){
                $numero[$c]=[rand(1,60)];
        }
        return $numero;
    }
}
