<?php
namespace App\Controller;

use Core\Components\Form\Form;
use Core\Controller;

class AdminController extends Controller{
    public function __construct()
    {
        
    }

    public function index(){
        
        $form = new Form();
        $this->renderView("Admin/Index", [$form]);
    }
}