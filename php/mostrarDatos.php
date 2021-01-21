<?php 
	include "php/conexion.php";
	$conexion=conexion();

	$sql="SELECT * from t_persona";
	$result=$conexion->query($sql);

	$tabla="";

	while($datos=$result->fetch_assoc()){
		$tabla=$tabla.'<tr>
							<td>'.$datos['id'].'</td>
							<td>'.$datos['nombre'].'</td>
							<td>'.$datos['paterno'].'</td>
							<td>'.$datos['materno'].'</td>
							<td>'.$datos['telefono'].'</td>
							td>'.$datos['email'].'</td>
							td>'.$datos['categoria'].'</td>
							<td>
								<span class= "btn btn-warning"></span>
							</td>
							<td>
								<span class= "btn btn-danger"></span>
							</td>
					</tr>';
	}
	
	$conexion->close();

	echo '<table class="table table-stripped">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>Categoria</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</thead>
				<tbody>'.$tabla.'
				</tbody>';
 ?>