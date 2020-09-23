<!-- Modal -->
<div class="modal fade" id="editRental<?php echo $rental->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <h2 class="m-auto">Información del Usuario</h2>
                    </div>
                    <div class="card-body w-100">
                        <input type="hidden" name="id" value="<?php echo $rental->id?>">
                    <div class="form-group">
                        <label>Fecha inicio renta</label>
                        <input type="text" name="start_date" class="form-control" placeholder="Fecha inicio" value="<?php echo $rental->start_date?>">
                    </div>
                    <div class="form-group">
                        <label>Fecha fin renta</label>
                        <input type="text" name="end_date" class="form-control" placeholder="Fecha fin" value="<?php echo $rental->end_date?>">
                    </div>
                    <div class="form-group">
                        <label>Total renta</label>
                        <input type="text" name="total" class="form-control" placeholder="Total"value="<?php echo $rental->total?>">
                    </div>
                    <div class="form-group">
                        <label>Cliente</label>
                        <select name="user_id" >
                            <?php foreach ($users as $user) { ?>
                            <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                        <?php } ?>
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