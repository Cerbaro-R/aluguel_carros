<?php

require_once 'models/CarroModel.php';

class CarrosController {

    private $model;

    public function __construct() {
        $this->model = new CarroModel();
    }

    public function table(){
        $carros = $this ->model->getAll();
        include 'views/home.php';
    }

    public function index() {
        
        $carros = $this->model->getAll();
        require 'views/carros/index.php';
    }

    public function create() {

        $marcas = $this->model->getMarcas();
        
        include 'views/carros/create.php';

    }

    public function store() {

        $data = [
            'marca_id' => $_POST['marca_id'],
            'modelo' => $_POST['modelo'],
            'ano' => $_POST['ano'],
            'cor' => $_POST['cor'],
            'placa' => $_POST['placa'],
            'preco_aluguel' => $_POST['preco_aluguel']
        ]; 

        $this->model->insert($data);

        header('Location: /carros');
    }


    public function edit($id) {
        $carro = $this->model->getById($id);  
        $marcas = $this->model->getMarcas();
        $status = $this->model->getStatus();
        
        include 'views/carros/edit.php';
    }

    public function update($id) {
        $data = [
            'marca_id' => $_POST['marca_id'],
            'modelo' => $_POST['modelo'],
            'ano' => $_POST['ano'],
            'cor' => $_POST['cor'],
            'placa' => $_POST['placa'],
            'preco_aluguel' => $_POST['preco_aluguel'],
            'carro_status_id' => $_POST['carro_status_id']
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
