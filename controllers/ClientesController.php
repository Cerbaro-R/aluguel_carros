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

    public function criar() {
        $data = [
            'nome' => $_POST['nome'],
            'cpf' => $_POST['cpf'],
            'telefone' => $_POST['telefone'],
            'enderco' => $_POST['enderco'],
            'email' => $_POST['email'],
        ];
        
        $this->model->insert($data);

        header('Location: /clientes');
    }
   

}
?>
