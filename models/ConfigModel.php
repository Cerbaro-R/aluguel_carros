<?php

require_once 'core/Database.php';

class ConfigModel {

    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAllUsers() {  
        $querry = $this->db->query("SELECT * FROM users");

        return $querry->fetchAll(PDO::FETCH_OBJ);
    }

    public function getUserById($id) {
        $query = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function insertUser($data) {
        $query = $this->db->prepare("INSERT INTO users(nome, senha) VALUES (:name, :password)");
        $query->bindParam(':name', $data['name']);
        $query->bindParam(':password', $data['password']);
        $query->execute();
    }

    public function updateUser($id, $data) {
        $query = $this->db->prepare("UPDATE users SET nome = :nome, senha = :senha WHERE id = :id");
        $query->bindParam(':nome', $data['nome']);
        $query->bindParam(':senha', $data['senha']);
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function deleteUser($id) {
        $query = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
    }
}