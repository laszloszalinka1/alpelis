<?php
class  Rentals
{

	private $id;
	private $start_date;
	private $end_date;
	private $total;
	private $pdo;
	public function __construct()
	{
		try{
			$this->pdo = new Database();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	public function getAll(){
		try{
			$strSql = "SELECT r.*, u.name  as user FROM rentals as r INNER JOIN users u ON u.id = r.user_id";
			
			$query = $this->pdo->select($strSql);
			return $query;
			
		}catch(PDOException $e){
		die($e->getMessage());
	}
	}
	public function newRentals($data){
		try{
			
			$this->pdo->insert('rentals',$data);
			return true;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM rentals WHERE id = :id";
            $arrayData = ['id' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function editRental($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->update('rentals', $data, $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteRental($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->delete('rentals', $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
    public function getLastId()
    {
        try {
            $strSql = "SELECT MAX(id) as id FROM movies";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function saveMovieRental($arrayMovies, $lastIdMovie)
    {
        try {
            foreach ($arrayMovies as $movie) {
                $data = [
                    'movie_id'      =>  $lastIdMovie,
                    'rental_id'   	=>  $movie["id"],
                    

                ];

                $this->pdo->insert('movie_rental', $data);
            } 

            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }    
    }

}



