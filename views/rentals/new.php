<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nuevo Renta</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del renta</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=rental&method=save" method="post">
					<div class="form-group">
						<label>Fecha inicio renta</label>
						<input type="date" name="start_date" id="start_date" class="form-control" placeholder="Fecha inicio">
					</div>
					<div class="form-group">
						<label>Fecha fin renta</label>
						<input type="date" name="end_date" id="end_date" class="form-control" placeholder="Fecha fin">
					</div>
					<div class="form-group">
						<label>Total renta</label>
						<input type="text" name="total" id="total" class="form-control" placeholder="Total">
					</div>
					<div class="form-group">
						<label>Cliente</label>
						<select id="user_id" class="form-control">
                        <option value="">Seleccione...</option>
                        <?php foreach($users as $user): ?>
                            <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                        <?php endforeach ?>
                    </select>
					</div>
					<div class="form-group row">
                    <div class="col-md-8">                            
                        <label>Peliculas</label>
                        <select id="movie" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach($movies as $movie): ?>
                                <option value="<?php echo $movie->id ?>"><?php echo $movie->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-4 mt-4">
                        <a href="#" class="btn btn-success" id="addElement">+</a>
                    </div>
                </div>                    

                <div id="list-movies" class="form-group"></div>

                <div class="form-group">
                    <button class="btn btn-primary" id="save">Guardar</button>
                </div>
					
					
				</form>
			</div>
		</div>
	</section>
</main>
<script src="assets/js/renta.js"></script>