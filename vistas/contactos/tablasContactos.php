<div class="card">
  <div class="card-body">
    <div class="table-responsive">
    	<table class="table table-striped table-condensed">
    		<thead>
    			<tr>
    				<th>Apellido Paterno</th>
    				<th>Apellido Materno</th>
    				<th>Nombres</th>
    				<th>Telefono</th>
    				<th>Email</th>
    				<th>Categoria</th>
    				<th>Editar </th>
    				<th>Eliminar</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td>
   		 				<span class="btn btn-warning btn-sm">
   		 					<span class="fas fa-pencil-alt" data-toggle="modal" data-target="#modalActualizarContacto"></span>
   		 				</span>
   		 			</td>
   		 			<td>
   		 				<span class="btn btn-danger btn-sm" onclick="eliminarContacto()">
   		 					<span class="far fa-trash-alt"></span>
   		 				</span>
   		 			</td>
    			</tr>
    		</tbody>
    	</table>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaContacto').DataTable();

    $('#btnGuardarContacto').click(fuction(){
        var categoria = $('#no')
    });

  });
</script>