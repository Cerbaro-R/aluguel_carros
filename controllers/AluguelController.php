<?php

require_once 'models/AluguelModel.php';
require_once 'models/CarroModel.php';
require_once 'models/ClienteModel.php';

class AluguelController {    

    private $model; 

    public function __construct() {
        $this->model = new AluguelModel();
        $this->carroModel = new CarroModel();
        $this->clienteModel = new ClienteModel();

    }

    public function index() {
        require 'views/aluguel/index.php';
    }
    public function create() {
        $carros = $this->carroModel->getAll();
        $clientes = $this->clienteModel->getAllClientes();
        include 'views/aluguel/create.php';
    }
}