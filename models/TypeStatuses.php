<?php

/**
 * 
 */
class TypeStatuses
{
	private $id;
	private $name;
	private $pdo;
	function __construct()
	{
		try{
		$this->pdo = new Database;
	}catch(PDOException $e){
		die($e->getMessage());
	}
	}
	public function getAll(){
		try{
		$strSql = "SELECT * FROM type_statuses";
		$query = $this->pdo->select($strSql);
		return $query;
	}catch(PDOException $e){
		die($e->getMessage());

			}
		}
	public function newStatus($data){
		try{
		$this->pdo->insert('type_statuses',$data);
		header('location: ?controller=typestatuses');
	}catch(PDOException $e){
		die($e->getMessage());

			}

	}

}