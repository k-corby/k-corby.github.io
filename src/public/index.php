<?php
require "../vendor/autoload.php";

use Core\App;
use Core\Router;

$router = new Router();
//var_dump(get_class_methods($router));
$app = new App($router);
