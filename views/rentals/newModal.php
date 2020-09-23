<!-- Modal -->
<div class="modal fade" id="newRenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Renta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="?controller=rental&method=save" method="POST">
        <div class="modal-body">
            <div class="card w-100 m-auto">
                <div class="card-header container">
                    <h2 class="m-auto">Información Usuario</h2>
                </div>

                <div class="card-body w-100">                    
                    <div class="form-group">
                        <label>Fecha inicio renta</label>
                        <input type="text" name="start_date" class="form-control" placeholder="Fecha inicio">
                    </div>
                    <div class="form-group">
                        <label>Fecha fin renta</label>
                        <input type="text" name="end_date" class="form-control" placeholder="Fecha fin">
                    </div>
                    <div class="form-group">
                        <label>Total renta</label>
                        <input type="text" name="total" class="form-control" placeholder="Total">
                    </div>
                    <div class="form-group">
                        <label>Cliente</label>
                        <input type="text" name="user_id" class="form-control" placeholder="Nombre cliente">
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