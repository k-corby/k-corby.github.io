<?php

namespace Core;

use Core\Classes\Interfaces\IDefaultContext;
use Exception;
use PDO;

class DefaultContext implements IDefaultContext
{
    private $connection = null;
    //private $host = "localhost";
    private $username = "admin";
    private $password = "secret";
    //private $database = "sportsapp";
    private $dsn = "mysql:host=db;port=3306;dbname=sportsapp";

    public function __construct()
    {
        //$this->connection = new PDO($this->dsn, $this->username, $this->password);
    }

    public function connect()
    {
        /*try{
			
            $this->connection = new PDO($this->dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $this->connection;
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }*/	
        $this->connection = new PDO($this->dsn, $this->username, $this->password);
        return $this->connection;
    }

    private function close()
    {
        //return $this->
    }

    public function insert(){

    }

    public function select($statement, $params = []){
        $stmt = $this->execute($statement, $params);
        $this->connection = null;
        return $stmt->fetchAll();
        
    }

    public function update(){

    }

    public function delete(){

    }

    public function execute($statement = "", $params = []){
        $query = $this->connect()->prepare($statement, $params);
        $query->execute();
        return $query;
    }
}
