<?php

require_once 'core/Database.php';

class ClienteModel {

    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function insert($data) {

        $query = $this -> db -> prepere
            ("INSERT INTO clientes (nome, cpf, telefone, endereco, email) 
            VALUES (:nome, :cpf, :telefone, :endereco, :email)");
        
        return $query -> execute($data);
    }
}