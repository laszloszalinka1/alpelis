

<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Editar pelicula</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de la pelicula</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=movie&method=save" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label>Descripción</label>
						<input type="text" name="description" class="form-control" placeholder="Descripción">
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>