<?php

/**
 * summary
 */
class TypeStatusController
{
    /**
     * summary
     */
    public function __construct()
    {
        
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
    public function index()
    {
    	require 'views/layout.php';
    }
}