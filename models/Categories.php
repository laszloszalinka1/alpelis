<?php

/**
 * Categories class
 */
class Categories 
{
	Private $id;
	private $name;
	private $status_id;
	private $pdo;
	function __construct()
	{
		try{
			$this->pdo = new Database();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	public function getAll(){
		try{
			$strSql = "SELECT c.*, s.name as status FROM categories c INNER JOIN statuses s ON s.id = c.status_id";
			
			$query = $this->pdo->select($strSql);
			return $query;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	public function newCategorie($data){
		try{
			$data['status_id'] = 1;
			$this->pdo->insert('categories',$data);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	 public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM categories WHERE id = :id";
            $arrayData = ['id' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function editCategorie($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->update('categories', $data, $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteCategorie($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->delete('categories', $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
}