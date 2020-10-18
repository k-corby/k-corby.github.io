<?php
namespace Core;

use Core\Classes\Interfaces\IRouter;

class Router implements IRouter{
    public $routes = [];
    public $params = [];

    public function routes($route, $params = []){
        $route = preg_replace('/\//', '\\/', $route);
        // Convert variables e.g. {controller}
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);
        // Convert variables with custom regular expressions e.g. {id:\d+}
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);
        //echo $route."<br>";
        // Add start and end delimiters, and case insensitive flag
        $route = '/^' . $route . '$/i';
        $this->routes[$route] = $params;
    }

    public function getUrl($url){
        explode('/',$url);
    }

    public function getRoutes(){
        return $this->routes;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function dispatch($url){
        if($this->match($url)){
            $controller = ucfirst($this->params['controller']);
            $controller = $this->getNameSpace($controller).$controller;
            $controller = $controller."Controller";
            if(class_exists($controller)){
                $action = $this->params['action'];
                if(method_exists($controller, $action)){
                    $container = require dirname(__DIR__,1) . '/Config/Container.php';
                    //var_dump($container);
                    $container->call(["$controller","$action"]);
                    //$class = new $controller();
                    //$class->$action();
                }else{
                    $error = new Controller();
                    $error->renderView("Template/Error");
                    //echo "method does not exist";
                }
            }else{
                $error = new Controller();
                $error->renderView("Template/Error");
                //echo "class does not exist";
            }
        }else{
            $error = new Controller();
            $error->renderView("Template/Error");
            //echo "no match";
        }
    }

    public function match($url)
    {
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                // Get named capture group values
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function getUrlParameters($url)
    {
        //echo $url;
        $params = array();
        foreach ($_GET as $param_name => $param_val) {
           // $params[] = $params[$param_name][$param_val];
            //array_push($params ,$param_name, $param_val);
            //echo "Param: $param_name; Value: $param_val<br />\n";
        }

        foreach($params as $key => $value){
           //echo "key: $key and value: $value <br>";
        }
    }

    protected function getNameSpace(){
        $namespace = 'App\Controller\\';
        if(array_key_exists('namespace', $this->params)){
            $namespace .= $this->params['namespace'] . '\\';
        }
        return ucfirst($namespace);
    }
}