<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de rentas</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de peliculas rentadas</h2>
			<a href="?controller=rental&method=add" class="btn btn-primary">Agregar</a>
			<button data-toggle="modal" data-target="#newRenta" class="btn btn-success">AgregarModal</button>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>fecha de renta</th>
						<th>fecha de entrega</th>
						<th>total</th>
						<th>usuario</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($rentals as $rental): ?>
						<tr>
							<td><?php echo $rental->id ?></td>
							<td><?php echo $rental->start_date ?></td>
							<td><?php echo $rental->end_date ?></td>
							<td><?php echo $rental->total ?></td>
							<td><?php echo $rental->user ?></td>
							<td>
								<a href="?controller=rental&method=edit&id=<?php echo $rental->id ?>" class="btn btn-warning" title="Editar pelicula">Editar</a>
								<button data-toggle="modal" data-target="#editRental<?php echo $rental->id ?>" class="btn btn-success">EditarModal</button>
								<a href="?controller=rental&method=delete" class="btn btn-danger" title="Eliminar pelicula">Eliminar</a>
							</td>
						</tr>
						<?php include 'views/rentals/editModal.php' ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
	<?php  include 'views/rentals/newModal.php' ?>
</main>
