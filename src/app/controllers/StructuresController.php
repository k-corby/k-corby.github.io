<?php
namespace App\Controller;

use App\AlgorithmService;
use Core\Controller;
use PDO;

class StructuresController extends Controller{
    private $service;
    public function __construct(AlgorithmService $algorithmService)
    {
       $this->service = $algorithmService;
    }

    public function index()
    {
        $this->renderView("Structures/Index");
    }
}