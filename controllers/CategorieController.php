<?php
require 'models/categories.php';
/**
 * Controlador de categoria
 */
class CategorieController
{
	private $categorieModel;

	public function __construct(){
		$this->categorieModel = new Categories;

	}
	 public function index(){
	 	$categories = $this->categorieModel->getAll();
	 	require 'views/layout.php';
        
	 	require 'views/sidebar.php';

	 	require 'views/categories/list.php';
	 }
	 public function add(){

	 	require 'views/layout.php';
	 	require 'views/sidebar.php';
	 	require 'views/categories/new.php';
	 }
	 public function save(){
	 	$this->categorieModel->newCategorie($_REQUEST);
	 	header('location: ?controller=categorie');

	 }
	 public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $categories = $this->categorieModel->getById($id);
            require 'views/sidebar.php';
            require 'views/layout.php';
            require 'views/categories/edit.php';
        } else {
            echo 'Error, Se requiere el id del usuario';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->categorieModel->editCategorie($_POST);
            header('Location: ?controller=categorie');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->categorieModel->deleteCategorie($_REQUEST);
        header('Location: ?controller=categorie');
    }
}