<?php

require_once  'models/LoginModel.php';

class LoginController {

    private $model;

    public function __construct(){
        $this->model = new LoginModel();
    }

    public function index(){
        $users = $this->model->getAll();
        include 'views/login/index.php';

    }

    public function login($id){

        $user = $_POST['user_id'];
        $password = $_POST['password'];
        $user = $this->model->getById($id);

        print_r($user);

    }
}