<?php

require_once 'models/AluguelModel.php';
require_once 'models/CarroModel.php';
require_once 'models/ClienteModel.php';

class AluguelController {    

    private $model; 
    private $carroModel;
    private $clienteModel;

    public function __construct() {
        $this->model = new AluguelModel();
        $this->carroModel = new CarroModel();
        $this->clienteModel = new ClienteModel();

    }

    public function index() {
        $alugueis = $this->model->getAll();
        require 'views/aluguel/index.php';
        
    }
    public function create() {
        $carros = $this->carroModel->getAll();
        $clientes = $this->clienteModel->getAll();
        include 'views/aluguel/create.php';
    }

    public function store() {
        $data = [
            'carro_id' => $_POST['carro_id'],
            'cliente_id' => $_POST['cliente_id'],
            'data_inicio' => $_POST['data_inicio'],
            'data_fim' => $_POST['data_fim'],
            'preco_total' => $_POST['preco_total'],
            'status' => 'Em aberto'
        ];

        $this->model->insert($data);

        header('Location: /aluguel');

    }

    public function edit($id){
        $aluguel = $this->model->getById($id);
        $carros = $this->carroModel->getAll();
        $clientes = $this->clienteModel->getAll();

        if($aluguel) {
            include 'views/aluguel/edit.php';
        } else {
            header('Location: /aluguel');
        }
    }
    public function inativar($id){
        $this -> model -> inativar($id);

        header ('Location: /aluguel');
    }
}