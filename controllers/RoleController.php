<?php

/**
 * Role class
 */
require 'models/Role.php';
require 'models/Statuses.php';
class RoleController 
{
	private $roleModel;
    private $status;
	
	function __construct()
	{
		$this->roleModel = new Role();
         $this->status = new Statuses;
	}
	public function index()
	{
		$roles = $this->roleModel->getAll();
		require 'views/layout.php';
		require 'views/sidebar.php';
		require 'views/roles/list.php';
	}
	public function add(){
		require 'views/layout.php';
		require 'views/sidebar.php';
		require 'views/roles/new.php';
	}
	public function save(){
		$this->roleModel->newRol($_REQUEST);
		header('location: ?controller=role');
	}
 	public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $roles = $this->roleModel->getById($id);
            require 'views/sidebar.php';
            require 'views/layout.php';
            require 'views/roles/edit.php';
        } else {
            echo 'Error, Se requiere el id del usuario';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->roleModel->editrol($_POST);
            header('Location: ?controller=role');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->rolesModel->deleterol($_REQUEST);
        header('Location: ?controller=role');
    }
}