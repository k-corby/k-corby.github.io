<?php
namespace Core;

use Core\Classes\Interfaces\IRouter;

class App{
    private $_router;
    
    public function __construct(IRouter $router)
    {
        $this->_router = $router;
        $this->_router->routes('', ['controller' => 'home', 'action' => 'index']);
        $this->_router->routes('{controller}/{action}');
        $this->_router->routes('{controller}/{id:\d+}/{action}');
        $this->_router->routes('{controller}/{action}/{id:\d+}');
        $this->_router->routes('admin/{controller}/{action}', ['namespace' => 'Admin']);
       
        $this->_router->dispatch($_SERVER['QUERY_STRING']);
    }
}