<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de estados</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de estados</h2>
			<a href="?controller=statuses&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombres</th>
						<th>tipo estado</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach($statuses as $statuser): ?>
						<tr>
							<td><?php echo $statuser->id ?></td>
							<td><?php echo $statuser->name ?></td>
							<td><?php echo $statuser->typesStatus ?></td>
							
							<td>
								<a href="?controller=statuses&method=edit&id=<?php echo $statuser->id ?>" class="btn btn-warning" title="Editar Usuario">Editar</a>
								<a href="?controller=statuses&method=delete" class="btn btn-danger" title="Eliminar Usuario">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
