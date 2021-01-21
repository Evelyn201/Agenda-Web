<?php 

	require_once "conexion.php";

	class Usuario extends Conectar{
		public function agregarUsuario(){
			$conexion = Conectar::conexion();
		}
	}

 ?>