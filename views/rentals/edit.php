<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Editar Renta</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del renta</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=rental&method=update" method="post">	
					<input type="hidden" name="id" value="<?php echo $rentals[0]->id?>">
					<div class="form-group">
						<label>Fecha inicio renta</label>
						<input type="text" name="start_date" class="form-control" placeholder="Fecha inicio" value="<?php echo $rentals[0]->start_date?>">
					</div>
					<div class="form-group">
						<label>Fecha fin renta</label>
						<input type="text" name="end_date" class="form-control" placeholder="Fecha fin" value="<?php echo $rentals[0]->end_date?>">
					</div>
					<div class="form-group">
						<label>Total renta</label>
						<input type="text" name="total" class="form-control" placeholder="Total"value="<?php echo $rentals[0]->total?>">
					</div>
					<div class="form-group">
						<label>Cliente</label>
						<select name="user_id">
                                <option value="">Seleccione...</option>
                            <?php foreach($users as $user): ?>
                                <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
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