<?php

require_once 'models/ConfigModel.php';
class ConfigController {    
    private $model;
    
    public function __construct() {
        $this->model = new ConfigModel();
    }    
    public function index() {
        include 'views/config/index.php';
    }
    
}
