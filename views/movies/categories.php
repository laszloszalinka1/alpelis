<main class="container">
    <div class="row">
        <h1 class="col-md-12 d-flex justify-content-center">Editar pelicula</h1>
    </div>

    <section class="row mt-3">
        <div class="card w-50 m-auto">
            <div class="card-header container">
                <h2 class="m-auto">Información de la pelicula</h2>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                       
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categories as $categorie): ?>
                        <tr>
                            <td><?php echo $categorie->id ?></td>
                            <td><?php echo $categorie->name ?></td>
                            
                            
                            <td>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    </tbody>
            </table>
        </section>
   

</main>