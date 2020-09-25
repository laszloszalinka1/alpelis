<?php

/**
 * clase statuses
 */
require 'models/Statuses.php';
require 'models/typeStatuses.php';
class StatusesController 
{
	private $statusesModel;
	private $typeStatus;
	function __construct()
	{	
		try{
		$this->statusesModel = new Statuses;
		$this->typeStatus = new TypeStatuses;
	}catch(PDOException $e){
		die($e->getMesage());
	}
	}
	public function index()
	{
		try{
		$statuses = $this->statusesModel->getAll();
		require 'views/layout.php';
		require 'views/sidebar.php';
		require 'views/statuses/list.php';
	}catch(PDOException $e){
		die($e->getMesage());
	}
	}
	public function add()
	{
		try{
			require 'views/layout.php';
		require 'views/sidebar.php';
		require 'views/statuses/new.php';

		}catch(PDOException $e){
		die($e->getMesage());
	}
	}
	public function save()
	{
		$this->statusesModel->newStatus($_REQUEST);
		header('location: ?controller=statuses');
	}
	public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $statuses = $this->statusesModel->getById($id);
            $status = $this->typeStatus->getAll();
            require 'views/sidebar.php';
            require 'views/layout.php';
            require 'views/statuses/edit.php';
        } else {
            echo 'Error, Se requiere el id del usuario';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->statusesModel->editStatus($_POST);
            header('Location: ?controller=statuses');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->rolesModel->deleteStatus($_REQUEST);
        header('Location: ?controller=statuses');
    }
}