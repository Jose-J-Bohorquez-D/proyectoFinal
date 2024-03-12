<?php 

    class Landing
    {
        
        public function __construct(){}
        
        public function main()
        {

        	require_once("Views/Landing/Modules/Header.php");
            require_once("Views/Landing/Modules/navbar.php");
            require_once("Views/Landing/Pages/Inicio.php");
        	require_once("Views/Landing/Modules/Footer.php");

        }


    }


?>