<?php

namespace App\Models;

class SportModel{
    public $termId;
    public $coachId;
    public $name;
    public $description;
    public $image;

    public $data;

    /*public function __construct($data)
    {
        $this->data = $data;
    }*/

    //setter
    public function setTermId($termId){
        $this->termId = $termId;
    }

    //getter
    public function getTermId(){
        return $this->termId;
    }
}