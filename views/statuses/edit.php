<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Editar estado</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del estado</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=statuses&method=update" method="post">

					<div class="form-group">
						<input type="hidden" value="<?php echo $statuses[0]->id ?>">
						<label>Nombre</label>
						
						<input type="text" name="name" class="form-control" placeholder="Nombre del estado" value="<?php echo $statuses[0]->name?>">
					</div>
					<div class="form-group">
						<label>Tipo de estado</label>
						<select name="type_status_id">
                                <option value="">Seleccione...</option>
                            <?php foreach($status as $status): ?>
                                <option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
                            <?php endforeach ?>
                        </select>
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>