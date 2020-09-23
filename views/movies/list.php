<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de peliculas</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de peliculas</h2>
			<a href="?controller=movie&method=new" class="btn btn-primary">Agregar</a>
			<button data-toggle="modal" data-target="#newMovie" class="btn btn-success">AgregarModal</button>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>descripción</th>
						<th>cliente</th>
						<th>estado</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach($movies as $movies): ?>
						<tr>
							<td><?php echo $movies->id ?></td>
							<td><?php echo $movies->name ?></td>
							<td><?php echo $movies->description ?></td>
							<td><?php echo $movies->user ?></td>
							<td><?php echo $movies->statuses ?></td>
							<td>
								<a href="?controller=movie&method=edit&id=<?php echo $movies->id ?>" class="btn btn-warning" title="Editar pelicula">Editar</a>
								<button data-toggle="modal" data-target="#editModal<?php echo $movies->id ?>" class="btn btn-success">EditarModal</button>
								<a href="?controller=movie&method=delete&id=<?php echo $movies->id ?>" class="btn btn-danger" title="Eliminar pelicula">Eliminar</a>
							</td>
						</tr>
						<?php include 'views/movies/editModal.php' ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
	<?php include 'views/movies/newModal.php' ?>
</main>
