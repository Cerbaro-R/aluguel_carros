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
        require 'views/aluguel/index.php';
    }
    public function create() {
        $carros = $this->carroModel->getAll();
        $clientes = $this->clienteModel->getAllClientes();
        include 'views/aluguel/create.php';
    }

    public function store() {
        $data = [
            'carro_id' => $_POST['carro_id'],
            'cliente_id' => $_POST['cliente_id'],
            'data_inicio' => $_POST['data_inicio'],
            'data_fim' => $_POST['data_fim'],
            'preco_total' => $_POST['preco_aluguel'],
            'status' => 'Em aberto'
        ];

        //não sei por que diabos mas a id do array que puxa do POST tem que ser como preco_aluguel, se for por o preco total
        //que seria o certo não funciona, vou deixar assim mesmo já que ta funcionando

        $this->model->insert($data);

        header('Location: /aluguel');

    }
}