<!-- Modal -->
<div class="modal fade" id="editModal<?php echo $movies->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="?controller=user&method=update" method="POST">
            <div class="modal-body">
                <div class="card w-100 m-auto">
                    <div class="card-header">
                        <h2 class="m-auto">Información de la pelicula</h2>
                    </div>
                    <div class="card-body w-100">
                        <input type="hidden" name="id" value="<?php echo $movies->id ?>">

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" placeholder="Ingrese    completo" value="<?php echo $movies->name?>">
                        </div>

                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" name="description" class="form-control" placeholder="Ingrese la descripción" value="<?php echo $movies->description ?>">
                        </div>

                        <div class="form-group">
                            <label>Usuario</label>
                            <select name="user_id">
                                <option value="">Seleccione...</option>
                            <?php foreach($users as $user): ?>
                                <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                            <?php endforeach ?>
                        </select>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
  </div>
</div>