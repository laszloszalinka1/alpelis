<?php
/**
 * 
 */
require 'models/TypeStatuses.php';
class TypeStatusesController
{
	private $TypeStatusesModel;
	function __construct()
	{
		$this->TypeStatusesModel = new TypeStatuses;
	}
	public function index()
	{	
		$typeStatuses = $this->TypeStatusesModel->getAll();
		require 'views/layout.php';
		require 'views/sidebar.php';
		require 'views/types_stauses/list.php';
	}
	public function add()
	{

		require 'views/layout.php';
		require 'views/sidebar.php';
		require 'views/types_stauses/new.php';
	}

	public function save()
	{
		try{
		$this->TypeStatusesModel->newStatus($_REQUEST);
	}catch(PDOException $e){
		die($e->getMessage());
	}

	}
	public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $statuses = $this->TypeStatusesModel->getById($id);
            $status = $this->TypeStatusesModel->getAll();
            require 'views/sidebar.php';
            require 'views/layout.php';
            require 'views/types_statuses/edit.php';
        } else {
            echo 'Error, Se requiere el id del usuario';
        }
    }

}