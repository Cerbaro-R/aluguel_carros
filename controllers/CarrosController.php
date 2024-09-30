<?php

require_once 'models/CarroModel.php';

class CarrosController {

    private $model;

    public function __construct() {
        $this->model = new CarroModel();
    }
    public function index() {
        
        $carros = $this->model->getAll();
        require 'views/carros/index.php';
    }

    public function create() {
        
        include 'views/carros/create.php';

    }

    public function store() {

        $data = [
            'marca' => $_POST['marca'],
            'modelo' => $_POST['modelo'],
            'ano' => $_POST['ano'],
            'cor' => $_POST['cor'],
            'placa' => $_POST['placa'],
            'preco_aluguel' => $_POST['preco_aluguel'],
            'status' => 'Em cadastramento'
        ]; 

        $this->model->insert($data);

        header('Location: /carros');
    }

    public function edit($id) {
        $carro = $this->model->getById($id);        
        include 'views/carros/edit.php';
    }

    public function update($id) {
        $data = [
            'marca' => $_POST['marca'],
            'modelo' => $_POST['modelo'],
            'ano' => $_POST['ano'],
            'cor' => $_POST['cor'],
            'placa' => $_POST['placa'],
            'preco_aluguel' => $_POST['preco_aluguel'],
            'status' => $_POST['status']
        ];
    
        $this->model->update($id, $data);
    
        header('Location: /carros');
    }
    public function inativar($id) {

        $this->model->inativar($id);
        
        header('Location: /carros');
        
    }
}
?>
