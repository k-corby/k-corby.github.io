<?php
namespace App\Controller;

use Core\Controller;

class HomeController extends Controller{
    public function __construct()
    {
        //echo "Home Controller";
    }

    public function index(){
        $this->renderView("Home/Index");
    }
}