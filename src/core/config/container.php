<?php

use DI\ContainerBuilder;
$containerBuilder = new ContainerBuilder;
$settings = require 'config.php';
$settings($containerBuilder);

$dependencies = require 'dependencies.php';
$dependencies($containerBuilder);

$container = $containerBuilder->build();

$settings = $container->get('settings');
return $container;

