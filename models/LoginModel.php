<?php

require_once  'core/Database.php';

class LoginModel {

    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAll() {
        $login = $this->db->prepare("SELECT * FROM users");
        $login->execute();
        return $login->fetchAll(PDO::FETCH_OBJ);    
    }

    public function getById($id) {
        $query = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }
}