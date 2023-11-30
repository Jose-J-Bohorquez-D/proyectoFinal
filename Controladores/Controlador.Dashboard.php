<?php 

    class Dashboard
    {
        
        public function __construct(){}
        
        public function main()
        {

        	require_once("Vistas/Dashboard/Modulos/Header.php");
        	require_once("Vistas/Dashboard/Modulos/NavLat.php");
            require_once("Vistas/Dashboard/Modulos/NavSup.php");
        	require_once("Vistas/Dashboard/Paginas/Inicio.php");
        	require_once("Vistas/Dashboard/Modulos/Footer.php");

        }


    }


 ?>