<?php

/**
 * 
 */
require 'models/Rentals.php';
require 'models/User.php';
require 'models/Statuses.php';
require 'models/Movies.php';
class RentalController
{
	private $modelRenta;
    private $userModel;
     private $status;
     private $movies;
	function __construct()
	{
		$this->modelRenta = new Rentals;
        $this->userModel = new User;
        $this->status = new Statuses;
        $this->movies = new Movies;
	}
	public function index(){
		$rentals = $this->modelRenta->getAll();
        $users = $this->userModel->getAll();
		require 'views/layout.php';
		require 'views/sidebar.php';
		require 'views/rentals/list.php';

	}
	public function add(){
        $users = $this->userModel->getAll();
        $movies = $this->movies->getAll();
		require 'views/layout.php';
		require 'views/sidebar.php';
		require 'views/rentals/new.php';
	}
	public function save()
    {
        //Organizar en un array los datos de la tabla movie
        $dataMovie = [
            'start_date'       => $_POST['start_date'],
            'end_date'         => $_POST['end_date'],
            'user_id'          => $_POST['user_id'],
            'total'             => $_POST['total'],
            'status_id'        => 1
        ];

        //Array de categorias
        $arrayMovies = isset($_POST['movies']) ? $_POST['movies'] : [];        

        if(!empty($arrayMovies)) {
            //Inserción de la Tabla Movie
            $respRental = $this->modelRenta->newRentals($dataMovie);

            //Obtener el ultimo ID registrado
            $lastIdRental = $this->modelRenta->getLastId();
            //Inserción de la Tabla category_movie
            $respMovieRental = $this->modelRenta->saveMovieRental($arrayMovies, $lastIdRental[0]->id);

        } else {
            $respRental          = false;
            $respMovieRental  = false;            
        }

        $arrayResp = [];

        if($respRental == true && $respMovieRental == true) {
            $arrayResp = [
                'success' => true,
                'message' => "Pelicula Alquilada"  
            ];
        } else {
            $arrayResp = [
                'error' => true,
                'message' => "Error Alquilando la Pelicula"  
            ];
        }

        echo json_encode($arrayResp);
        return;

    }
	public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $rentals = $this->modelRenta->getById($id);
            $users = $this->userModel->getAll();

            require 'views/sidebar.php';
            require 'views/layout.php';
            require 'views/rentals/edit.php';
        } else {
            echo 'Error, Se requiere el id del usuario';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->modelRenta->editRental($_POST);
            header('Location: ?controller=rental');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->modelRenta->deleteRental($_REQUEST);
        header('Location: ?controller=categorie');
    }
}
