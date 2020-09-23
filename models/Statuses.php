<?php
/**
 * 
 */
class Statuses
{
	private $id;
	private $name;
	private $type_status_id;
	private $pdo;
	function __construct()
	{
			try{
			$this->pdo = new Database();
		}catch(PDOException $e){
			die($e->getMesage());
		}
	}
	public function getAll(){
			try{
			$strSql = "SELECT s.*, t.name  as typesStatus FROM statuses as s INNER JOIN type_statuses t ON t.id = s.type_status_id";
			$query = $this->pdo->select($strSql);
			return $query;
		}catch (PDOException $e) {
		    	die($e->getMessage());
		}
	}
		public function newStatus($data){
			try{
				 $this->pdo->insert('statuses',$data);

			}catch (PDOException $e) {
		    	die($e->getMessage());
		}
	}
	 public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM statuses WHERE id = :id";
            $arrayData = ['id' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function editStatus($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->update('statuses', $data, $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteStatus($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->delete('statuses', $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
}