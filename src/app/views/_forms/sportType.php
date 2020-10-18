<?php

namespace App\View\Forms;

use App\Models\SportModel;
use Core\Components\Form\Form;

class SportForm extends Form{
    //public 

    public function formBuilder(){
        $sport = new SportModel();
        $sport->name = "Set a sport name.";
        $sport->image = "Upload a sport image.";
        $sport->description = "Add a description for the form";
    }
}