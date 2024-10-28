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
    public function users() {
        $users = $this->model->getAllUsers();
        include 'views/config/users.php';     
        
    }
    public function storeUser() {
        $data = [
            'name' => $_POST['name'],
            'password' => $_POST['password']
        ];
        $this->model->insertUser($data);     

        header('Location: /config/users');
    }
    
}
