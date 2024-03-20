<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function main(): string
    {
        $salida = view('landing/modulos/header');
        $salida .= view('landing/paginas/inicio');
        $salida .= view('landing/modulos/footer');

        return $salida;
    }

}
