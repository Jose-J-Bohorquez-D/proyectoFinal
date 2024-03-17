<?php session_start();
    class Landing
    {
        
        public function __construct(){}
        
        public function main()
        {

        	require_once("Views/Landing/Templates/Header.php");
            require_once("Views/Landing/index.php");
        	require_once("Views/Landing/Templates/Footer.php");

        }

    }

?>