<?php 

	namespace App\Controllers;

	class Roles extends BaseController
	{

		public function index()
		{
			#var_dump($this->session) ;
			return "<h1>ControladorRoles</h1>";

		}

		public function leerRolesCtlr()
		{
			return "<h1>leer Roles Controlador</h1>";
		}

	}

 ?>