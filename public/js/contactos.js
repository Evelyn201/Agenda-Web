 $(document).ready(function(){

	$('#categoriaTablaContactos').load('vistas/contactos/tablasContactos.php');
});

function guardarContacto(){
	swal({
		title: "Contacto Guardado!",
		
		icon: "success",

	});
}

function actualizarContacto(){
	swal({
		title: "Contacto Actualizado!",
		icon: "success",
	});
}

function eliminarContacto(){
	swal({
		title: "¿Estas seguro de eliminar este contacto?",
		text: "Una vez eliminado no podra ser recuperdado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("Se ha eliminado");
			swal("Contacto eliminado!", {
				icon: "success",
			});
		} 
	});
}
