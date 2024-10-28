<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


if ($uri === '/' || $uri === '/index.php') {
    require 'controllers/LoginController.php';
    $controller = new LoginController();
    $controller->index();
}elseif ($uri === '/login') {
    require 'controllers/LoginController.php';
    $controller = new LoginController();
    $controller->login();
}elseif ($uri === '/home') {
    require 'controllers/CarrosController.php';
    $controller = new CarrosController();
    $controller->table();
}elseif ($uri === '/carros') {
    require 'controllers/CarrosController.php';
    $controller = new CarrosController();
    $controller->index();
}elseif ($uri === '/carros/store') {
    require 'controllers/CarrosController.php';
    $controller = new CarrosController();
    $controller->store();
}elseif ($uri === '/carros/create') {
    require 'controllers/CarrosController.php';
    $controller = new CarrosController();
    $controller->create();
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
    $controller->inativar($matches[1]);
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
elseif ($uri === '/aluguel') {
    require 'controllers/AluguelController.php';
    $controller = new AluguelController();
    $controller->index();
}elseif ($uri === '/aluguel/create') {
    require 'controllers/AluguelController.php';
    $controller = new AluguelController();
    $controller->create();
}elseif ($uri === '/aluguel/store') {
    require 'controllers/AluguelController.php';
    $controller = new AluguelController();
    $controller->store();
}elseif (preg_match('/^\/aluguel\/edit\/(\d+)$/', $uri, $matches)) {
    require 'controllers/AluguelController.php';
    $controller = new AluguelController();
    $controller->edit($matches[1]);
}elseif (preg_match('/^\/aluguel\/update\/(\d+)$/', $uri, $matches)) {
    require 'controllers/AluguelController.php';
    $controller = new AluguelController();
    $controller->update($matches[1]);   
}elseif (preg_match('/^\/aluguel\/delete\/(\d+)$/', $uri, $matches)) {
    require 'controllers/AluguelController.php';
    $controller = new AluguelController();
    $controller->delete($matches[1]);
}elseif ($uri === '/config') {
    require 'controllers/ConfigController.php';
    $controller = new ConfigController();
    $controller->index();
}elseif ($uri === '/config/users') {
    require 'controllers/ConfigController.php';
    $controller = new ConfigController();
    $controller->users();
}elseif ($uri === '/config/users/store') {
    require 'controllers/ConfigController.php';
    $controller = new ConfigController();
    $controller->storeUser();
}