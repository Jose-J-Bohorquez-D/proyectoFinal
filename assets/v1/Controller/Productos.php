<?php session_start();
    class Productos
    {
        
        public function __construct(){}
        
        public function main()
        {
        	require_once("Views/Landing/Templates/Header.php");
        	require_once("Views/Landing/Templates/Footer.php");
            require_once("Views/Landing/Modules/pasarela.php");
        }
    }

?>