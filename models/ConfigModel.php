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

    public function insertUser($data) {
        $query = $this->db->prepare("INSERT INTO users(nome, senha) VALUES (:name, :password)");
        $query->bindParam(':name', $data['name']);
        $query->bindParam(':password', $data['password']);
        $query->execute();
    }
}