<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nuevo estado</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del estado</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=typestatuses&method=save" method="post">
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $typeStatuses[0]->id?>">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Nombre del estado" value="<?php echo $typestatuses[0]->name ?>">
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>