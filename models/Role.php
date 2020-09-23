<?php

class Role
{
	private $id;
	private $name;
	private $pdo;

	public function __construct(){
		try{
			$this->pdo = new Database();
		}catch(PDOExeption $e){
			die($e->getMessage());
		}
	}
	public function getAll(){
		try{
		$strSql = "SELECT * FROM roles";
		$query = $this->pdo->select($strSql);
		return $query;
	}catch(PDOExeption $e){
		die($e->getMessage());
	}
	}
	public function newRol($data){
		try{
			$data['status_id'] = 1;
			$this->pdo->insert('roles',$data);
		}catch(PDOExeption $e){
			die($e->getMessage());
		}
	}
 	public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM roles WHERE id = :id";
            $arrayData = ['id' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function editRol($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->update('roles', $data, $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteRol($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->delete('roles', $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
}