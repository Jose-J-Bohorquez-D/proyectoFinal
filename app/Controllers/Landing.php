<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function main(): string
    {
        $data = ['titulo'=>'Inicio - Campeche.com'];
        return view('landing/modulos/header2',$data)
            .  view('landing/modulos/nav2')
            .  view('landing/paginas/index')
            .  view('landing/modulos/footer2');
    }

    public function somosCampeche(): string
    {
        echo "<h1>somosCampeche</h1>";
        return view('landing/modulos/header')
            .  view('landing/paginas/somos')
            .  view('landing/modulos/footer');
    }
    public function pedidos(): string
    {
        echo "<h1>pedidos</h1>";
        return view('landing/modulos/header')
            .  view('landing/paginas/pedidos')
            .  view('landing/modulos/footer');
    }

    public function compras(): string
    {
        echo "<h1>compras</h1>";
        return view('landing/modulos/header')
            .  view('landing/paginas/compras')
            .  view('landing/modulos/header');
    }

    public function miPerfil(): string
    {
        echo "<h1>mi perfil</h1>";
        return view('landing/modulos/header')
            .  view('landing/paginas/mi_perfil')
            .  view('landing/modulos/header');
    }

}
