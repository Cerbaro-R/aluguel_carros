<?php

require_once 'models/ClienteModel.php';

class ClientesController {

    private $model;

    public function __construct() {
        $this->model = new ClienteModel();
    }
    public function index() {
        
        require 'views/clientes/index.php';
    }

    public function create() {
        require 'views/clientes/create.php';
    }

    // criar 
    public function criar() {
        $data = [
            'nome' => $_POST['nome'],
            'cpf' => $_POST['cpf'],
            'telefone' => $_POST['telefone'],
            'endereco' => $_POST['endereco'],
            'email' => $_POST['email'],
        ];
        
        $this->model->insert($data);

        header('Location: /clientes');
    }

    // exibir os clientes
    public function exibir() {

        $clientes = $this->model->getAllClientes();

        include 'views/clientes/index.php';
    }

    // função para excluir
    public function excluirCliente($id) {

        $this->model->excluir($id);
        
        header('Location: /clientes');
    }
   

}
?>
