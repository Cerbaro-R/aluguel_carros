<?php

require_once 'models/AluguelModel.php';
require_once 'models/CarroModel.php';
require_once 'models/ClienteModel.php';

class AluguelController {    

    private $model; 

    public function __construct() {
        $this->model = new AluguelModel();
    }

    public function index() {
        require 'views/aluguel/index.php';
    }
}