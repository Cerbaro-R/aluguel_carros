<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


if ($uri === '/' || $uri === '/index.php') {
    include 'views/home.php';
}elseif ($uri === '/carros') {
    require 'controllers/CarrosController.php';
    $controller = new CarrosController();
    $controller->index();
}elseif ($uri === '/carros/store') {
    require 'controllers/CarrosController.php';
    $controller = new CarrosController();
    $controller->store();
}elseif ($uri === '/carros/create') {
    include 'views/carros/create.php';
}elseif ($uri === '/clientes') {
    require 'controllers/ClientesController.php';
    $controller = new ClientesController();
    $controller->exibir();
}elseif ($uri === '/clientes/criar') {
    require 'controllers/ClientesController.php';
    $controller = new ClientesController();
    $controller->criar();
}elseif ($uri === '/clientes/create') {
    include 'views/clientes/create.php';
}