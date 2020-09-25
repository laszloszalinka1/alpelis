<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Tipos de estados</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de estados</h2>
			<a href="?controller=typestatuses&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php foreach($typeStatuses as $typeStatusers): ?>
						<tr>
							<td><?php echo $typeStatusers->id ?></td>
							<td><?php echo $typeStatusers->name ?></td>
							
							
							<td>
								<a href="?controller=typestatuses&method=edit&id=<?php echo $typeStatusers->id ?>" class="btn btn-warning" title="Editar pelicula">Editar</a>
								<a href="?controller=typestatuses" class="btn btn-danger" title="Eliminar pelicula">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
