$(document).ready(function(){

	$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
});
function eliminarCategoria(){
	swal({
		title: "¿Estas seguro de eliminar esta categoria?",
		text: "Una vez eliminado no podra ser recuperdado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("Se ha eliminado");
			swal("Categoria eliminada!", {
				icon: "success",
			});
		} 
	});
}

function actualizarCategoria(){
	swal({
		title: "Categoria Actualizada!",
		icon: "success",
	});
}