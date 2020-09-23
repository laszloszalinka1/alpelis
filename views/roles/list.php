<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de roles</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de roles</h2>
			<a href="?controller=role&method=add" class="btn btn-primary">Agregar</a>
			<button data-toggle="modal" data-target="#newRol" class="btn btn-success">AgregarModal</button>
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
					<?php foreach($roles as $role): ?>
						<tr>
							<td><?php echo $role->id ?></td>
							<td><?php echo $role->name ?></td>
							
							
							<td>
								<a href="?controller=role&method=edit&id=<?php echo $role->id?>" class="btn btn-warning" title="Editar pelicula">Editar</a>
								<button data-toggle="modal" data-target="#editRol<?php echo $role->id ?>" class="btn btn-success">EditarModal</button>
								<a href="?controller=role&method=delete&id=<?php echo $role->id?>" class="btn btn-danger" title="Eliminar pelicula">Eliminar</a>
							</td>
						</tr>
						<?php include 'views/roles/editModal.php' ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
	<?php include 'views/roles/newModal.php' ?>
</main>
