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
}elseif (preg_match('/^\/carros\/edit\/(\d+)$/', $uri, $matches)) {
    require 'controllers/CarrosController.php';
    $controller = new CarrosController();
    $controller->edit($matches[1]);   
}elseif (preg_match('/^\/carros\/update\/(\d+)$/', $uri, $matches)) {
    require 'controllers/CarrosController.php';
    $controller = new CarrosController();
    $controller->update($matches[1]);   
}elseif (preg_match('/^\/carros\/delete\/(\d+)$/', $uri, $matches)) {
    require 'controllers/CarrosController.php';
    $controller = new CarrosController();
    $controller->inativarCarro($matches[1]);
}
elseif ($uri === '/clientes') {
    require 'controllers/ClientesController.php';
    $controller = new ClientesController();
    $controller->exibir();
}elseif ($uri === '/clientes/criar') {
    require 'controllers/ClientesController.php';
    $controller = new ClientesController();
    $controller->criar();
}elseif ($uri === '/clientes/create') {
    include 'views/clientes/create.php';
}elseif (preg_match('/^\/clientes\/delete\/(\d+)$/', $uri, $matches)) {
    require 'controllers/ClientesController.php';
    $controller = new ClientesController();
    $controller->excluirCliente($matches[1]);
}elseif (preg_match('/^\/clientes\/edit\/(\d+)$/', $uri, $matches)) {
    require 'controllers/ClientesController.php';
    $controller = new ClientesController();
    $controller->atualizar($matches[1]);   
}elseif (preg_match('/^\/clientes\/update\/(\d+)$/', $uri, $matches)) {
    require 'controllers/ClientesController.php';
    $controller = new ClientesController();
    $controller->update($matches[1]);   
}