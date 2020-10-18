<?php

namespace Core;

class Controller
{
    public function __construct()
    {
    }

    public function renderView($view, $data = [])
    {
        if(file_exists("../App/Views/".$view.".php")){
            require "../App/Views/Template/Index.php";
        }else{
            echo "File does not exist";
        }
    }
}
