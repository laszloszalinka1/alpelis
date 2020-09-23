<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Categorias</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de categorias</h2>
			<a href="?controller=categorie&method=add" class="btn btn-primary">Agregar</a>
			<button data-toggle="modal" data-target="#newCategorie" class="btn btn-success">AgregarModal</button>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>estado</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach($categories as $categorie): ?>
						<tr>
							<td><?php echo $categorie->id ?></td>
							<td><?php echo $categorie->name ?></td>
							<td><?php echo $categorie->status ?></td>
							
							<td>
								<a href="?controller=categorie&method=edit&id=<?php echo $categorie->id ?>" class="btn btn-warning" title="Editar pelicula">Editar</a>
								<button data-toggle="modal" data-target="#editCategorie<?php echo $categorie->id ?>" class="btn btn-success">EditarModal</button>
								<a href="?controller=categorie&method=delete&id=<?php echo $categorie->id ?>" class="btn btn-danger" title="Eliminar pelicula">Eliminar</a>
							</td>
						</tr>
						<?php include 'views/categories/editModal.php' ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
	<?php include 'views/categories/newModal.php' ?>
</main>
