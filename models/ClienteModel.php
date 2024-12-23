<?php

require_once 'core/Database.php';

class ClienteModel {

    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function insert($data) {

        $query = $this -> db -> prepare
            ("INSERT INTO clientes (nome, cpf, telefone, endereco, email) 
            VALUES (:nome, :cpf, :telefone, :endereco, :email)");
        
        return $query -> execute($data);
    }

    public function getAll() {
        $cliente = $this->db->prepare("SELECT * FROM clientes WHERE Ativo = '1'" );
        $cliente->execute();
        return $cliente->fetchAll(PDO::FETCH_OBJ);
    }

    public function excluir($id) {

        $query = $this->db->prepare("UPDATE clientes  SET ativo = '0' WHERE id = :id");

        return $query->execute(['id' => $id]);
    }

    public function update($id, $data) {
        
        $query = $this -> db -> prepare
            ("UPDATE clientes SET nome = :nome, cpf = :cpf, telefone = :telefone, endereco = :endereco, email = :email WHERE id = :id");
    
        $data['id'] = $id;
        return $query->execute($data);
    }

    public function getById($id) {
        $query = $this -> db -> prepare("SELECT * FROM clientes WHERE id = :id");
        $query -> bindParam(':id', $id, PDO::PARAM_INT);
        $query -> execute();
        return $query -> fetch(PDO::FETCH_OBJ);
    }
}