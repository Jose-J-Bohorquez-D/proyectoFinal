<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function main(): string
    {
        $data = ['titulo'=>'Campeche.com - Inicio'];
        return view('landing/plantilla',$data);
        /*
        return view('landing/modulos/header2',$data)
            .  view('landing/modulos/nav2')
            .  view('landing/paginas/inicio2')
            .  view('landing/modulos/footer2');
        */
    }

    public function nosotros(): string
    {
        $data = ['titulo'=>'Campeche.com - Nosotros'];
        return view('landing/modulos/header2',$data)
            .  view('landing/modulos/nav2')
            .  view('landing/paginas/nosotros')
            .  view('landing/modulos/footer2');
    }
    public function pedidos(): string
    {
        $data = ['titulo'=>'Campeche.com - Pedidos'];
        return view('landing/modulos/header2',$data)
            .  view('landing/modulos/nav2')
            .  view('landing/paginas/pedidos')
            .  view('landing/modulos/footer2');
    }

    public function compras(): string
    {
        $data = ['titulo'=>'Campeche.com - Compras'];
        return view('landing/modulos/header2',$data)
            .  view('landing/modulos/nav2')
            .  view('landing/paginas/compras')
            .  view('landing/modulos/header2');
    }

    public function contacto(): string
    {
        $data = ['titulo'=>'Campeche.com - Contacto'];
        return view('landing/modulos/header2',$data)
            .  view('landing/modulos/nav2')
            .  view('landing/paginas/contacto')
            .  view('landing/modulos/footer2');
    }

    public function miPerfil(): string
    {
        $data = ['titulo'=>'Campeche.com - Mi Perfil'];
        return view('landing/modulos/header2',$data)
            .  view('landing/modulos/nav2')
            .  view('landing/paginas/miperfil')
            .  view('landing/modulos/footer2');
    }

}
