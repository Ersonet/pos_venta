<?php include "Views/Templates/header.php"; ?>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Usuarios</li>
  </ol>
  <button class="btn btn-primary mb-2" type="button">Añadir nuevo usuario</button>
  <table class="table table-dark" id="tblUsuarios">
    <thead class="thead-ligth">
      <tr>
        <th>Id</th>
        <th>Usuario</th>
        <th>Nombre</th>
        <th>Caja</th>
        <th>Estado</th>
        <th></th>
      </tr>
    </thead>
  </table>
  <div id="nuevo_usuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="my-modal-title">Nuevo Usuario</h5>
          <button class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" id="frmUsuarios">
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <imput id="usuario" class="form-control" type="text" name="usuario" placeholder="usuario">
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
<?php include "Views/Templates/footer.php"; ?>