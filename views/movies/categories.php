<main class="container">
    <div class="row">
        <h1 class="col-md-12 d-flex justify-content-center">Ver categorias</h1>
    </div>

    <section class="row mt-3">
        <div class="card w-50 m-auto">
            <div class="card-header container">

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