<?php
namespace App\Controller;

use App\AlgorithmService;
use Core\Controller;
use PDO;

class AlgorithmController extends Controller{
    private $service;
    public function __construct(AlgorithmService $algorithmService)
    {
       $this->service = $algorithmService;
    }

    public function index()
    {
        $this->renderView("Algorithm/Index");
    }

    public function register(){
        $this->renderView("Algorithm/Register");
    }
}