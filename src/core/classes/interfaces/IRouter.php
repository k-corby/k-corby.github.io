<?php
namespace Core\Classes\Interfaces;

interface IRouter{
    public function routes($route, $params = []);
    public function dispatch($url);
}