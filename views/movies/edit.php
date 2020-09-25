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
				<form action="?controller=movie&method=update" method="post">
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $movies[0]->id ?>">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Nombre" value="<?php echo $movies[0]->name ?>">
					</div>
					<div class="form-group">
						<label>Descripción</label>
						<input type="text" name="description" class="form-control" placeholder="Descripción" value="<?php echo $movies[0]->description ?>">
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
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>