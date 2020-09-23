<!-- Modal -->
<div class="modal fade" id="newMovie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Pelicula</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="?controller=movie&method=save" method="POST">
        <div class="modal-body">
            <div class="card w-100 m-auto">
                <div class="card-header container">
                    <h2 class="m-auto">Información Usuario</h2>
                </div>

                <div class="card-body w-100">                    
                    <div class="form-group">
                        <label> Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Ingrese su nombre">
                    </div>
                    <<div class="form-group">
                        <label>Descripción</label>
                        <input type="text" name="description" class="form-control" placeholder="Descripción">
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" name="user_id" class="form-control" placeholder="Usuario">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary">Generar</button>
        </div>
      </form>
    </div>
  </div>
</div>