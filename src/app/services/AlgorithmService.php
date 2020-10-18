<?php
namespace App;

use Core\Classes\Interfaces\IDefaultContext;

class AlgorithmService implements IAlgorithmService{
    public $context;

    public function __construct(IDefaultContext $defaultContext)
    {
        $this->context = $defaultContext;
        //$this->conn = $db->connect();
        //var_dump($this->conn);
        //echo "SPORT SERVICE";
    }

    public function addAlgo()
    {
        
    }

    public function getAlgo(){
        $data = $this->context->select("SELECT * FROM sports", []);
        return $data;
    }

    public function getAlgoById(){
        $result = $this->db->select("SELECT * FROM sports WHERE sportId = ");
    }
}