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

    public function login(){

        $id = $_POST['user_id'];
        $senha = $_POST['senha'];
        $user = $this->model->getById($id);
        $senha_bd = $user->senha;
        if($senha == $senha_bd){
            header('Location: /home');
        }else{
            $users = $this->model->getAll();
            $error = "Usuário ou senha inválidos";
            require 'views/login/index.php';
        }
    }
}