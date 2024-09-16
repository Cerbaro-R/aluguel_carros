<?php

require_once 'models/CarroModel.php';

class CarrosController {

    private $model;

    public function __construct() {
        $this->model = new CarroModel();
    }
    public function index() {
        
        require 'views/carros/index.php';
    }

    public function create() {
        require 'views/carros/create.php';
    }

    public function store() {

        $data = [
            'marca' => $_POST['marca'],
            'modelo' => $_POST['modelo'],
            'ano' => $_POST['ano'],
            'cor' => $_POST['cor'],
            'placa' => $_POST['placa'],
            'preco_aluguel' => $_POST['preco_aluguel'],
            'status' => 'Em cadastramento',
        ]; 

        $this->model->insert($data);

        header('Location: /carros');
    }
}
?>
