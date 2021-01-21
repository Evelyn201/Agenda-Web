<?php 

	function conexion (){
		$conexion= new mysqli("127.0.0.1", "root", "", "agenda");
		if ($conexion->connection_errno) {
			echo "Fallo al conectar :". $conexion->connect_error;
		}
		return $conexion;
	}
 ?>