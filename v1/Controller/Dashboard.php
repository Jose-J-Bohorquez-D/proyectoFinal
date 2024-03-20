<?php 

    class Dashboard
    {
        
        public function __construct(){}
        
        public function main()
        {

        	require_once("Views/Dashboard/Modules/Header.php");
        	require_once("Views/Dashboard/Modules/NavLat.php");
            require_once("Views/Dashboard/Modules/NavSup.php");
        	require_once("Views/Dashboard/Pages/Inicio.php");
        	require_once("Views/Dashboard/Modules/Footer.php");

        }


    }


 ?>