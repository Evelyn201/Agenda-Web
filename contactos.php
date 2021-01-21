<!DOCTYPE html>
<html>
<head>
	<title>Contactos</title>
	<link rel="icon" type="image/jpg" href="public/img/logo.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<div class="container">
		<div class=""></div>
		<?php require_once "menu.php"; ?>

		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Tus Contactos :)!</h1>
				<hr>
				<button class="btn btn-primary ">
					<span class="fas fa-user-plus fa-2x" data-toggle="modal" data-target="#modalContacto"> Agregar Contacto</span>
				</button>
				<hr class="my-4">
				<div id="categoriaTablaContactos"></div>
			</div>
			
		</div>
		<?php 
		require_once "vistas/contactos/modalContactos.php";
		require_once "vistas/contactos/modalActualizar.php";
		
		 ?>
</div>
<script src="public/js/contactos.js"></script>

</body>
</html>