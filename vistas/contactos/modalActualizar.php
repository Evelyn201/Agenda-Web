
<!-- Modal -->
<div class="modal fade" id="modalActualizarContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="card border-warning mb-3" style="max-width: 18rem;">
          <div class="card-body text-warning">
           <form id="frmAgregarContacto">
            <label for="aPaterno" > Apellido Paterno</label>
            <input type="text" id="aPaterno" name="aPaterno" class="frm-control"></form>
            <hr>
            <label form="aMaterno"> Apellido Materno</label>
            <input type="text" id="aMaterno" name="aMaterno" class="frm-control">
            <hr>
            <label form="nombre">Nombres</label>
            <input type="text" id="nombre" name="nombre" class="frm-control">
            <hr>
            <label form="telefono">Telefono</label>
            <input type="text" id="telefono" name="telefono" class="frm-control">
            <hr>
            <label form="email">Email</label> <br>
            <input type="text" id="email" name="email" class="frm-control">
            <hr>
            <label form="categoria">Categoria</label>
            <input type="text" id="categoria" name="categoria" class="frm-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="actualizarContacto()">Actualizar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>