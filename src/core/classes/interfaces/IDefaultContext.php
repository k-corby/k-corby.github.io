<?php
namespace Core\Classes\Interfaces;

interface IDefaultContext{
    public function select($statement, $params = []);
}